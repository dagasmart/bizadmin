--==========================优先执行下面普通函数=======================================

--======== 触发函数封装检查和创建逻辑================
-- 删除
DROP FUNCTION IF EXISTS public.create_trigger_if_exists CASCADE;
-- 创建
CREATE OR REPLACE FUNCTION public.create_trigger_if_exists(new_table_name text, new_trigger_name text, func_name text)
  RETURNS VOID AS $$
BEGIN
    -- 1. 检查指定的表是否存在
    IF EXISTS (
        SELECT 1 FROM pg_tables 
        WHERE schemaname || '.' || tablename = new_table_name
    ) THEN
				-- created_at 为整数时
				IF EXISTS (
						-- created_at 为整数时
            SELECT 1 FROM information_schema.columns 
            WHERE (table_schema||'.'||"table_name") = new_table_name AND "column_name" = 'created_at' AND "data_type" = 'integer'
        ) THEN
					-- 2. (可选) 时间字段追加默认值
					EXECUTE format('ALTER TABLE %s ALTER COLUMN created_at SET DEFAULT EXTRACT(EPOCH FROM CURRENT_TIMESTAMP)::BIGINT', new_table_name);
				ELSE
				  RAISE NOTICE 'Column % does not exist, trigger not created.', new_table_name;
				END IF;
				
				-- created_at 不为整数或为时间戳时
				IF EXISTS (
						-- created_at 不为整数或为时间戳时
            SELECT 1 FROM information_schema.columns 
            WHERE (table_schema||'.'||"table_name") = new_table_name AND "column_name" = 'created_at' AND "data_type" <> 'integer'
        ) THEN
					-- 2. (可选) 时间字段追加默认值
					EXECUTE format('ALTER TABLE %s ALTER COLUMN created_at SET DEFAULT CURRENT_TIMESTAMP', new_table_name);
				ELSE
				  RAISE NOTICE 'Column % does not exist, trigger not created.', new_table_name;
				END IF;
				
				-- updated_at 为整数时
				IF EXISTS (
						-- updated_at 为整数时
            SELECT 1 FROM information_schema.columns 
            WHERE (table_schema||'.'||"table_name") = new_table_name AND "column_name" = 'updated_at' AND "data_type" = 'integer'
        ) THEN
					-- 2. (可选) 时间字段追加默认值
					EXECUTE format('ALTER TABLE %s ALTER COLUMN updated_at SET DEFAULT EXTRACT(EPOCH FROM CURRENT_TIMESTAMP)::BIGINT', new_table_name);
				ELSE
				  RAISE NOTICE 'Column % does not exist, trigger not created.', new_table_name;
				END IF;
				
				-- updated_at 不为整数或为时间戳时
				IF EXISTS (
            SELECT 1 FROM information_schema.columns 
            WHERE table_schema||'.'||"table_name" = new_table_name AND "column_name" = 'updated_at' AND "data_type" <> 'integer'
        ) THEN
					-- 2. (可选) 时间字段追加默认值
					EXECUTE format('ALTER TABLE %s ALTER COLUMN updated_at SET DEFAULT CURRENT_TIMESTAMP', new_table_name);
-- 				ELSE
-- 				  RAISE NOTICE 'Column % does not exist, trigger not created.', new_table_name;
-- 				END IF;
					-- 3. (可选) 如果触发器已存在，先删除它，避免重复创建的错误
					EXECUTE format('DROP TRIGGER IF EXISTS %I ON %s', new_trigger_name, new_table_name);
					-- 4. 使用动态SQL创建触发器
					EXECUTE format('CREATE TRIGGER %I BEFORE INSERT OR UPDATE ON %s FOR EACH ROW EXECUTE FUNCTION %s()', new_trigger_name, new_table_name, func_name);
				ELSE
				  RAISE NOTICE 'Column % does not exist, trigger not created.', new_table_name;
				END IF;

        RAISE NOTICE 'Trigger % created on %', new_trigger_name, new_table_name;
    ELSE
        RAISE NOTICE 'Table % does not exist, trigger not created.', new_table_name;
    END IF;
END;
$$ LANGUAGE plpgsql;

--========时间更新函数================
-- 删除
DROP FUNCTION IF EXISTS public.auto_updated_at CASCADE;
-- 创建
CREATE OR REPLACE FUNCTION public.auto_updated_at()
RETURNS TRIGGER AS $$
BEGIN
    NEW.updated_at = CURRENT_TIMESTAMP::TIMESTAMP(0);
    RETURN NEW;
END;
$$ LANGUAGE plpgsql;


--========crc32加密函数================
-- 删除
DROP FUNCTION IF EXISTS public.crc32 CASCADE;
-- 创建
CREATE OR REPLACE FUNCTION public.crc32(bytea)
RETURNS int8 AS $$
DECLARE
    crc bigint := 0xFFFFFFFF;
    poly bigint := 0xEDB88320; -- CRC-32 polynomial
    data bytea;
    i int;
    j int;
BEGIN
    data := $1;
    FOR i IN 0..length(data)-1 LOOP
        crc := crc ^ (get_byte(data, i + 1) << 24);
        FOR j IN 0..7 LOOP
            IF (crc & -2147483648) <> 0 THEN
                crc := (crc << 1) ^ poly;
            ELSE
                crc := crc << 1;
            END IF;
        END LOOP;
    END LOOP;
    RETURN crc ^ 0xFFFFFFFF;
END;
$$ LANGUAGE plpgsql;


--========时间更新函数================
-- 删除
DROP FUNCTION IF EXISTS public.auto_insert_into_tbl_partition CASCADE;
-- 创建
CREATE OR REPLACE FUNCTION public.auto_insert_into_tbl_partition()
RETURNS TRIGGER AS $$
DECLARE
    time_column_name    text ;          -- 父表中用于分区的时间字段的名称[必须首先初始化!!]
    curMM       varchar(6);     -- 'YYYYMM'字串,用做分区子表的后缀
    isExist         boolean;        -- 分区子表,是否已存在
    startTime       text;
    endTime     text;
    strSQL          text;     
BEGIN
    -- 调用前,必须首先初始化(时间字段名):time_column_name [直接从调用参数中获取!!]
    time_column_name := TG_ARGV[0];    
    -- 判断对应分区表 是否已经存在?
    EXECUTE 'SELECT $1.'||time_column_name INTO strSQL USING NEW;
    curMM := to_char( strSQL::timestamp , 'YYYYMM' );
    select count(*) INTO isExist from pg_class where relname = (TG_RELNAME||'_'||curMM);  
    -- 若不存在, 则插入前需 先创建子分区
    IF ( isExist = false ) THEN 
        -- 创建子分区表
        startTime := curMM||'01 00:00:00.000';
        endTime := to_char( startTime::timestamp + interval '1 month', 'YYYY-MM-DD HH24:MI:SS.MS');
        strSQL := 'CREATE TABLE IF NOT EXISTS '||TG_RELNAME||'_'||curMM||
                  ' ( CHECK('||time_column_name||'>='''|| startTime ||''' AND '
                             ||time_column_name||'< '''|| endTime ||''' )
                          ) INHERITS ('||TG_RELNAME||') ;'  ; 
        EXECUTE strSQL;  
        -- 创建索引
        strSQL := 'CREATE INDEX '||TG_RELNAME||'_'||curMM||'_INDEX_'||time_column_name||' ON '
                  ||TG_RELNAME||'_'||curMM||' ('||time_column_name||');' ;
        EXECUTE strSQL;        
    END IF;  
    -- 插入数据到子分区!
    strSQL := 'INSERT INTO '||TG_RELNAME||'_'||curMM||' SELECT $1.*' ;
    EXECUTE strSQL USING NEW;  
    RETURN NULL;
END
$$ LANGUAGE plpgsql;


--========消息订阅函数================
-- 删除
DROP FUNCTION IF EXISTS public.fun_message CASCADE;
-- 创建
CREATE OR REPLACE FUNCTION public.fun_message()
RETURNS TRIGGER AS $$
DECLARE
		rec record;
BEGIN
IF (TG_OP = 'INSERT') THEN
  select TG_OP,NEW.* INTO rec;
  --触发器中发送插入的新数据
  perform pg_notify('message_insert', row_to_json(rec)::text);
  RETURN NEW;
elseif (TG_OP = 'UPDATE') then
  select TG_OP,NEW.* INTO rec;
  --触发器中发送插入的新数据
  perform pg_notify('message_update', row_to_json(rec)::text);
  RETURN NEW;
END IF;
END;
$$ LANGUAGE plpgsql;


--========消息推送函数================
-- 删除
DROP FUNCTION IF EXISTS public.func_notify CASCADE;
-- 创建
CREATE OR REPLACE FUNCTION public.func_notify()
RETURNS TRIGGER AS $$
DECLARE
		rec record;
BEGIN
IF (TG_OP = 'INSERT') THEN
  select TG_OP,NEW.* into rec;
  --触发器中发送插入的新数据
  perform pg_notify('notify_insert',row_to_json(rec)::text);
  RETURN NEW;
elsif (TG_OP = 'UPDATE') then
perform pg_notify('notify_update',row_to_json(rec)::text);
RETURN NEW;
END IF;
END;
$$ LANGUAGE plpgsql;


--==========================优先执行下面创建触发函数=======================================

-- 方法一：批量自动创建触发器
SELECT
(SELECT create_trigger_if_exists(concat(schemaname,'.',tablename),concat(schemaname,'.',tablename,'_updated_at_trigger'),concat(schemaname,'.','auto_updated_at')))
FROM
  pg_tables 
WHERE
  schemaname = 'public';

-- 方法二：创建触发器 admin_apis
-- SELECT create_trigger_if_exists('public.admin_apis','public.admin_apis_updated_at_trigger','public.auto_updated_at');

-- 方法三：创建触发器 admin_menus
-- DROP TRIGGER IF EXISTS admin_menus_updated_at_trigger ON public.admin_menus;
-- CREATE TRIGGER admin_menus_updated_at_trigger
-- BEFORE INSERT OR UPDATE ON public.admin_menus
-- FOR EACH ROW EXECUTE FUNCTION public.auto_updated_at();

--==========================执行下面更新序列值=======================================

DO $$
DECLARE
    tab_record RECORD;
    seq_name TEXT;
BEGIN
    FOR tab_record IN 
        SELECT table_name
        FROM information_schema.tables
        WHERE table_schema = 'public'
        AND table_type = 'BASE TABLE'
    LOOP
        -- 直接构建序列名
        seq_name := 'public.' || tab_record.table_name || '_id_seq';
        
        BEGIN
            -- 尝试重置序列
            EXECUTE format('SELECT setval(%L, (SELECT COALESCE(MAX(id), 1) FROM public.%I))', 
                      seq_name, tab_record.table_name);
                      
            RAISE NOTICE '表 % 的序列已更新', tab_record.table_name;
        EXCEPTION WHEN OTHERS THEN
            -- 忽略没有对应序列的表
            RAISE NOTICE '表 % 跳过: %', tab_record.table_name, SQLERRM;
        END;
    END LOOP;
END
$$;