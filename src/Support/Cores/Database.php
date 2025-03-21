<?php

namespace DagaSmart\BizAdmin\Support\Cores;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use DagaSmart\BizAdmin\Models\AdminRole;
use Illuminate\Database\Schema\Blueprint;

class Database
{
    private string|null $moduleName;

    public function __construct($moduleName = null)
    {
        $this->moduleName = $moduleName;
    }

    public static function make($moduleName = null)
    {
        return new self($moduleName);
    }

    public function tableName($name)
    {
        return $this->moduleName . $name;
    }

    public function create($tableName, $callback)
    {
        if (!Schema::hasTable($tableName)) {
            Schema::create($this->tableName($tableName), $callback);
        }
    }

    public function dropIfExists($tableName)
    {
        Schema::dropIfExists($this->tableName($tableName));
    }

    public function initSchema()
    {
        $this->down();
        $this->up();
    }

    public function up()
    {
        $this->create('admin_users', function (Blueprint $table) {
            $table->comment('系统-管理员表');
            $table->id();
            $table->string('username', 120)->unique()->comment('用户名');
            $table->string('password', 80)->comment('密码');
            $table->tinyInteger('enabled')->default(1)->comment('是否启用');
            $table->string('name')->default('')->comment('姓名');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('remember_token', 100)->nullable()->comment('Token');
            if ($this->moduleName) {
                $table->biginteger('mer_id')->default(0)->comment('商户id');
                $table->unique(['username', 'mer_id']);
                $table->index(['mer_id']);
            }
            $table->index(['id']);
            $table->timestamps();
        });

        $this->create('admin_roles', function (Blueprint $table) {
            $table->comment('系统-角色表');
            $table->id();
            $table->string('name', 50)->unique()->comment('名称');
            $table->string('slug', 50)->unique()->comment('标识');
            if ($this->moduleName) {
                $table->biginteger('mer_id')->default(0)->comment('商户id');
                $table->unique(['slug', 'mer_id']);
                $table->index(['mer_id']);
            }
            $table->index(['id']);
            $table->timestamps();
        });

        $this->create('admin_permissions', function (Blueprint $table) {
            $table->comment('系统-权限表');
            $table->id();
            $table->string('name', 50)->unique()->comment('名称');
            $table->string('slug', 50)->unique()->comment('标识');
            $table->text('http_method')->nullable()->comment('请求方式');
            $table->text('http_path')->nullable()->comment('路由');
            $table->integer('custom_order')->default(0)->comment('排序[0-255]');
            $table->integer('parent_id')->default(0)->comment('父级ID');
            $table->integer('is_customize')->default(0)->comment('是否自定义');
            if ($this->moduleName) {
                $table->biginteger('mer_id')->default(0)->comment('商户id');
                $table->unique(['slug', 'mer_id']);
                $table->index(['mer_id']);
            }
            $table->timestamps();
        });

        $this->create('admin_menus', function (Blueprint $table) {
            $table->comment('系统-菜单表');
            $table->id();
            $table->integer('parent_id')->default(0)->comment('父级ID');
            $table->integer('custom_order')->default(10)->comment('排序[0-255]');
            $table->string('title', 100)->comment('菜单名称');
            $table->string('icon', 100)->nullable()->comment('菜单图标');
            $table->string('url')->nullable()->comment('菜单路由');
            $table->tinyInteger('url_type')->default(1)->comment('路由类型(1:路由,2:外链,3:iframe)');
            $table->tinyInteger('visible')->default(1)->comment('是否可见');
            $table->tinyInteger('is_home')->default(0)->comment('是否为首页');
            $table->tinyInteger('keep_alive')->nullable()->comment('页面缓存');
            $table->string('iframe_url')->nullable()->comment('iframe_url');
            $table->string('component')->nullable()->comment('菜单组件');
            $table->tinyInteger('is_full')->default(0)->comment('是否是完整页面');
            $table->string('extension')->nullable()->comment('扩展');
            $table->string('is_publicly')->default(1)->comment('开放方式(0私有,1公开)');
            if ($this->moduleName) {
                $table->biginteger('mer_id')->default(0)->comment('商户id');
                $table->unique(['url', 'mer_id']);
                $table->index(['mer_id']);
            }
            $table->timestamps();
        });

        $this->create('admin_role_users', function (Blueprint $table) {
            $table->comment('系统-角色与管理员关联表');
            $table->integer('role_id')->comment('角色ID');
            $table->integer('user_id')->comment('管理员ID');
            if ($this->moduleName) {
                $table->biginteger('mer_id')->default(0)->comment('商户id');
                $table->unique(['role_id', 'user_id', 'mer_id']);
                $table->index(['mer_id']);
            }
            $table->index(['role_id', 'user_id']);
            $table->timestamps();
        });

        $this->create('admin_role_permissions', function (Blueprint $table) {
            $table->comment('系统-角色与权限关联表');
            $table->integer('role_id')->comment('角色ID');
            $table->integer('permission_id')->comment('权限ID');
            if ($this->moduleName) {
                $table->biginteger('mer_id')->default(0)->comment('商户id');
                //$table->unique(['role_id', 'permission_id', 'mer_id']);
                $table->index(['mer_id']);
            } else {
                $table->unique(['role_id', 'permission_id']);
            }
            $table->index(['role_id', 'permission_id']);
            $table->timestamps();
        });

        $this->create('admin_permission_menu', function (Blueprint $table) {
            $table->comment('系统-权限与菜单关联表');
            $table->integer('permission_id')->comment('权限ID');
            $table->integer('menu_id')->comment('菜单ID');
            if ($this->moduleName) {
                $table->biginteger('mer_id')->default(0)->comment('商户id');
                $table->unique(['permission_id', 'menu_id', 'mer_id']);
                $table->index(['mer_id']);
            }
            $table->index(['permission_id', 'menu_id']);
            $table->timestamps();
        });

        // 如果是模块，跳过下面的表
        if ($this->moduleName) {
            return;
        }

        $this->create('admin_extensions', function (Blueprint $table) {
            $table->comment('系统-扩展插件表');
            $table->id();
            $table->string('name', 100)->comment('名称');
            $table->string('code', 100)->comment('标识');
            $table->tinyInteger('is_enabled')->default(0)->comment('是否启用');
            $table->string('module')->nullable()->comment('模块');
            $table->biginteger('mer_id')->index()->default(0)->comment('商户id');
            $table->unique(['code', 'module', 'mer_id']);
            $table->index(['code', 'module', 'mer_id']);
            $table->timestamps();
        });

        $this->create('admin_code_generators', function (Blueprint $table) {
            $table->comment('系统-代码生成器表');
            $table->id();
            $table->string('title')->default('')->comment('名称');
            $table->string('table_name')->default('')->comment('表名');
            $table->string('primary_key')->default('id')->comment('主键名');
            $table->string('model_name')->default('')->comment('模型名');
            $table->string('controller_name')->default('')->comment('控制器名');
            $table->string('service_name')->default('')->comment('服务名');
            $table->longText('columns')->comment('字段信息');
            $table->tinyInteger('need_timestamps')->default(0)->comment('是否需要时间戳');
            $table->tinyInteger('soft_delete')->default(0)->comment('是否需要软删除');
            $table->text('needs')->nullable()->comment('需要生成的代码');
            $table->text('menu_info')->nullable()->comment('菜单信息');
            $table->text('page_info')->nullable()->comment('页面信息');
            $table->text('save_path')->nullable()->comment('保存位置');
            $table->string('module')->nullable()->comment('模块');
            $table->timestamps();
        });

        $this->create('admin_settings', function (Blueprint $table) {
            $table->comment('系统-全局设置表');
            $table->string('key')->default('')->comment('标识名');
            $table->longText('values')->nullable()->comment('对象值');
            $table->string('module')->nullable()->comment('模块');
            $table->timestamps();
        });



        $this->create('admin_pages', function (Blueprint $table) {
            $table->comment('系统-页面管理表');
            $table->id();
            $table->string('title')->comment('页面名称');
            $table->string('sign')->comment('页面标识');
            $table->longText('schema')->comment('页面结构');
            $table->string('module')->nullable()->comment('模块');
            $table->timestamps();
        });

        $this->create('admin_relationships', function (Blueprint $table) {
            $table->comment('系统-动态关联表');
            $table->id();
            $table->string('model')->comment('模型');
            $table->string('title')->comment('关联名称');
            $table->string('type')->comment('关联类型');
            $table->string('remark')->comment('关联名称')->nullable();
            $table->text('args')->comment('关联参数')->nullable();
            $table->text('extra')->comment('额外参数')->nullable();
            $table->string('module')->nullable()->comment('模块');
            $table->timestamps();
        });

        $this->create('admin_apis', function (Blueprint $table) {
            $table->comment('系统-动态Api表');
            $table->id();
            $table->string('title')->comment('接口名称');
            $table->string('path')->comment('接口路径');
            $table->string('template')->comment('接口模板');
            $table->tinyInteger('enabled')->default(1)->comment('是否启用');
            $table->longText('args')->comment('接口参数')->nullable();
            $table->tinyInteger('is_login')->default(1)->comment('登录鉴权');
            $table->string('module')->nullable()->comment('模块');
            $table->timestamps();
        });

        $this->create('system_soft', function (Blueprint $table) {
            $table->comment('软件商店表');
            $table->id();
            $table->string('soft_name',50)->comment('软件名称');
            $table->string('soft_code',50)->comment('软件标识');
            $table->string('soft_icon')->nullable()->comment('软件图标');
            $table->tinyInteger('soft_images')->default(0)->comment('软件组图');
            $table->tinyInteger('soft_type')->default(0)->comment('软件分类');
            $table->string('soft_desc')->nullable()->comment('软件描述');
            $table->tinyInteger('soft_authorize')->default(0)->comment('授权方式：1免费，2付费，3兑换');
            $table->float('soft_price')->nullable()->comment('金额或积分');
            $table->integer('soft_status')->nullable()->comment('状态：0待审核，1受理中，2上线交易，-1下线维护');
            $table->string('soft_dirname')->nullable()->comment('目录名');
            $table->string('soft_zip')->nullable()->comment('压缩包');
            $table->smallInteger('soft_develop_id')->nullable()->comment('开发者id');
            $table->string('soft_develop_as',50)->nullable()->comment('开发者');
            $table->unique(['soft_code', 'soft_develop_id']);
            $table->timestamps();
            $table->softDeletes();
        });

        $this->create('system_soft_order', function (Blueprint $table) {
            $table->comment('软件商店订单表');
            $table->id();
            $table->string('soft_id')->comment('软件id');
            $table->string('service_auth')->comment('授权方式');
            $table->string('service_timer')->nullable()->comment('使用时长/年');
            $table->tinyInteger('service_endate')->default(0)->comment('有效期限，默认0无限制');
            $table->tinyInteger('service_price')->default(0)->comment('支付单价');
            $table->string('pay_type')->nullable()->comment('支付方式');
            $table->tinyInteger('pay_amount')->default(0)->comment('支付总额');
            $table->float('order_no')->nullable()->comment('订单号');
            $table->integer('pay_status')->nullable()->comment('支付状态');
            $table->string('pay_no')->nullable()->comment('支付单号');
            $table->string('pay_time')->nullable()->comment('支付时间');
            $table->string('pay_desc')->nullable()->comment('支付描述');
            $table->string('payer_id')->nullable()->comment('支付人id ');
            $table->string('payer_as')->nullable()->comment('支付人');
            $table->string('module')->nullable()->comment('模块');
            $table->biginteger('mer_id')->default(0)->comment('商户id');
            $table->index(['soft_id', 'module', 'mer_id']);
            $table->timestamps();
            $table->softDeletes();
        });

        $this->create('system_message', function (Blueprint $table) {
            $table->comment('系统消息表');
            $table->id();
            $table->tinyInteger('from_uid')->comment('发件人id');
            $table->string('from_name',50)->comment('发送人');
            $table->string('title',100)->comment('标题');
            $table->text('body')->nullable()->comment('内容');
            $table->string('type',20)->default('private')->comment('类型：private私信、system系统、group群组、department部门、region地区');
            $table->string('to_ids')->nullable()->comment('收件方id');
            $table->string('to_names')->nullable()->comment('收件方');
            $table->string('module',50)->nullable()->comment('模块');
            $table->biginteger('mer_id')->default(0)->comment('商户id');
            $table->unique(['from_uid', 'title', 'module', 'mer_id']);
            $table->timestamps();
            $table->softDeletes();
        });

        $this->create('system_message_log', function (Blueprint $table) {
            $table->comment('消息日志表');
            $table->id();
            $table->integer('msg_id')->comment('消息id');
            $table->integer('to_uid')->comment('接收人id');
            $table->string('to_name',50)->comment('接收人id');
            $table->string('state')->default(1)->comment('状态：1已读,2已回复');
            $table->text('reply')->nullable()->comment('回复');
            $table->string('module',50)->nullable()->comment('模块');
            $table->biginteger('mer_id')->default(0)->comment('商户id');
            $table->index(['msg_id', 'to_uid', 'module', 'mer_id']);
            $table->timestamps();
            $table->softDeletes();
        });

        $this->create('system_merchant', function (Blueprint $table) {
            $table->comment('商户表');
            $table->id();
            $table->string('username')->comment('用户名');
            $table->string('realname')->comment('商户姓名');
            $table->string('mobile')->nullable()->comment('手机号');
            $table->tinyInteger('is_mobile')->default(0)->comment('手机可用');
            $table->tinyInteger('is_mobile_wechat')->default(0)->comment('微信同号');
            $table->string('email')->nullable()->comment('电子邮件');
            $table->tinyInteger('is_email')->default(0)->comment('邮箱可用');
            $table->string('id_card',18)->nullable()->comment('身份证号');
            $table->integer('city_id')->nullable()->comment('城市ID');
            $table->string('address')->nullable()->comment('联系地址');
            $table->string('linkman',50)->nullable()->comment('联系人');
            $table->tinyInteger('audit_status')->default(0)->comment('审核状态');
            $table->string('audit_desc')->nullable()->comment('审核结果');
            $table->string('auditor',50)->nullable()->comment('审核人');
            $table->tinyInteger('state')->default(0)->comment('状态');
            $table->index(['username', 'mobile', 'auditor']);
            $table->timestamps();
            $table->softDeletes();
        });

        $this->create('system_merchant_log', function (Blueprint $table) {
            $table->comment('商户记录表');
            $table->id();
            $table->bigInteger('mer_id')->comment('商户id');
            $table->tinyInteger('oper_status')->comment('操作状态');
            $table->string('oper_desc')->nullable()->comment('操作结果');
            $table->tinyInteger('oper_as')->default(0)->comment('操作人');
            $table->index(['mer_id']);
            $table->timestamps();
            $table->softDeletes();
        });

    }

    public function down()
    {
        $this->dropIfExists('admin_users');
        $this->dropIfExists('admin_roles');
        $this->dropIfExists('admin_permissions');
        $this->dropIfExists('admin_menus');
        $this->dropIfExists('admin_role_users');
        $this->dropIfExists('admin_role_permissions');
        $this->dropIfExists('admin_permission_menu');

        // 如果是模块，跳过下面的表
        if ($this->moduleName) {
            return;
        }

        $this->dropIfExists('admin_code_generators');//代码生器
        $this->dropIfExists('admin_settings');//设置
        $this->dropIfExists('admin_pages');//页面管理
        $this->dropIfExists('admin_relationships');//动态关联
        $this->dropIfExists('admin_apis');//动态api
        $this->dropIfExists('system_soft');//软件
        $this->dropIfExists('system_soft_order');//软件订单
        $this->dropIfExists('system_message');//消息
        $this->dropIfExists('system_message_log');//消息日志
        $this->dropIfExists('system_merchant');//商户
        $this->dropIfExists('system_merchant_log');//商户日志
		$this->dropIfExists('admin_extensions');//扩展插件
    }

    /**
     * 填充初始数据
     *
     * @return void
     */
    public function fillInitialData()
    {
        $data = function ($data) {
            foreach ($data as $k => $v) {
                if (is_array($v)) {
                    $data[$k] = "['" . implode("','", $v) . "']";
                }
            }
            $now = date('Y-m-d H:i:s');

            return array_merge($data, ['created_at' => $now, 'updated_at' => $now]);
        };

        $adminUser       = DB::table($this->tableName('admin_users'));
        $adminMenu       = DB::table($this->tableName('admin_menus'));
        $adminPermission = DB::table($this->tableName('admin_permissions'));
        $adminRole       = DB::table($this->tableName('admin_roles'));

        // 创建初始用户
        $adminUser->truncate();
        $adminUser->insert($data([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'name'     => 'Administrator',
        ]));

        // 创建初始角色
        $adminRole->truncate();
        $adminRole->insert($data([
            'name' => 'Administrator',
            'slug' => AdminRole::SuperAdministrator,
        ]));

        // 用户 - 角色绑定
        DB::table($this->tableName('admin_role_users'))->truncate();
        DB::table($this->tableName('admin_role_users'))->insert($data([
            'role_id' => 1,
            'user_id' => 1,
        ]));

        // 创建初始权限
        $adminPermission->truncate();
        $adminPermission->insert([
            $data(['name' => '首页', 'slug' => 'home', 'http_path' => ['/home*'], "parent_id" => 0]),
            $data(['name' => '基本设置', 'slug' => 'basic', 'http_path' => '', "parent_id" => 0]),
            $data(['name' => '数据字典', 'slug' => 'dict', 'http_path' => ["/dict*"], "parent_id" => 2]),
            $data(['name' => '地区管理', 'slug' => 'region', 'http_path' => ["/region*"], "parent_id" => 2]),
            $data(['name' => '系统管理', 'slug' => 'system', 'http_path' => '', "parent_id" => 0]),
            $data(['name' => '管理员', 'slug' => 'admin_users', 'http_path' => ["/admin_users*"], "parent_id" => 3]),
            $data(['name' => '角色', 'slug' => 'roles', 'http_path' => ["/roles*"], "parent_id" => 3]),
            $data(['name' => '权限', 'slug' => 'permissions', 'http_path' => ["/permissions*"], "parent_id" => 3]),
            $data(['name' => '菜单', 'slug' => 'menus', 'http_path' => ["/menus*"], "parent_id" => 3]),
            $data(['name' => '设置', 'slug' => 'settings', 'http_path' => ["/settings*"], "parent_id" => 3]),
            $data(['name' => '软件', 'slug' => 'soft', 'http_path' => ["/soft*"], "parent_id" => 0]),
            $data(['name' => '消息', 'slug' => 'message', 'http_path' => ["/message*"], "parent_id" => 0]),
        ]);

        // 角色 - 权限绑定
        DB::table($this->tableName('admin_role_permissions'))->truncate();
        $permissionIds = DB::table($this->tableName('admin_permissions'))->orderBy('id')->pluck('id');
        foreach ($permissionIds as $id) {
            DB::table($this->tableName('admin_role_permissions'))->insert($data([
                'role_id'       => 1,
                'permission_id' => $id,
            ]));
        }

        // 创建初始菜单
        $adminMenu->truncate();
        $adminMenu->insert([
            $data([
                'parent_id' => 0,
                'title'     => 'dashboard',
                'icon'      => 'mdi:chart-line',
                'url'       => '/dashboard',
                'is_home'   => 1,
            ]),
            $data([
                'parent_id' => 0,
                'title'     => 'admin_basic',
                'icon'      => 'lets-icons:setting-alt-line-light',
                'url'       => '/basic',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 2,
                'title'     => 'admin_dict',
                'icon'      => 'streamline:dictionary-language-book',
                'url'       => '/basic/dict',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 2,
                'title'     => 'admin_region',
                'icon'      => 'healthicons:city',
                'url'       => '/basic/region',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 0,
                'title'     => 'admin_system',
                'icon'      => 'material-symbols:settings-outline',
                'url'       => '/system',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 3,
                'title'     => 'admin_users',
                'icon'      => 'ph:user-gear',
                'url'       => '/system/admin_users',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 3,
                'title'     => 'admin_roles',
                'icon'      => 'carbon:user-role',
                'url'       => '/system/admin_roles',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 3,
                'title'     => 'admin_permission',
                'icon'      => 'fluent-mdl2:permissions',
                'url'       => '/system/admin_permissions',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 3,
                'title'     => 'admin_menu',
                'icon'      => 'ant-design:menu-unfold-outlined',
                'url'       => '/system/admin_menus',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 3,
                'title'     => 'admin_setting',
                'icon'      => 'akar-icons:settings-horizontal',
                'url'       => '/system/settings',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 0,
                'title'     => 'system_soft',
                'icon'      => 'mdi:microsoft-windows',
                'url'       => '/system/soft',
                'is_home'   => 0,
            ]),
            $data([
                'parent_id' => 0,
                'title'     => 'system_message',
                'icon'      => 'fluent:person-chat-20-regular',
                'url'       => '/system/message',
                'is_home'   => 0,
            ]),
        ]);

        // 非模块追加[商户]菜单和权限
        if (!$this->moduleName) {
            $adminMenu->insert([
                $data([
                    'parent_id' => 0,
                    'title'     => 'system_merchant',
                    'icon'      => 'heroicons:user-20-solid',
                    'url'       => '/system/merchant',
                    'is_home'   => 0,
                ])
            ]);
            $adminPermission->insert([
                $data([
                    'name' => '商户',
                    'slug' => 'merchant',
                    'http_path' => ["/merchant*"],
                    "parent_id" => 0
                ]),
            ]);
        }

        // 权限 - 菜单绑定
        DB::table($this->tableName('admin_permission_menu'))->truncate();
        $menus = $adminMenu->get();
        foreach ($menus as $menu) {
            $_list   = [];
            $_list[] = $data(['permission_id' => $menu->id, 'menu_id' => $menu->id]);

            if ($menu->parent_id != 0) {
                $_list[] = $data(['permission_id' => $menu->parent_id, 'menu_id' => $menu->id]);
            }

            DB::table($this->tableName('admin_permission_menu'))->insert($_list);
        }

        // 默认中文
        settings()->set('admin_locale', 'zh_CN');

        // 填充代码生成器常用字段
        $this->fillCodeGeneratorFields();
    }

    /**
     * 多库时用：Schema::getCurrentSchemaListing()
     * @return array|mixed[]
     */
    public static function getTables()
    {

        try {
            return collect(json_decode(json_encode(Schema::getAllTables()), true))
                ->map(fn($i) => config('database.default') == 'sqlite' ? $i['name'] : array_shift($i))
                ->toArray();
        } catch (\Throwable $e) {
        }

        // laravel 11+
        return array_column(Schema::getTables(Schema::getCurrentSchemaName()), 'name');
    }

    /**
     * 填充代码生成器常用字段
     *
     * @return void
     */
    public function fillCodeGeneratorFields()
    {
        if ($this->moduleName) return;

        $data = [
            'admin_common_field'        => '{"标题/名称":{"name":"title","type":"string","default":null,"nullable":false,"comment":"标题","action_scope":["list","detail","create","edit"],"file_column":0,"list_component":{"list_component_property":[{"name":"searchable","value":"1"}],"list_component_type":"TableColumn","component_property_options":[{"label":"align","value":"align"},{"label":"breakpoint","value":"breakpoint"},{"label":"canAccessSuperData","value":"canAccessSuperData"},{"label":"className","value":"className"},{"label":"classNameExpr","value":"classNameExpr"},{"label":"copyable","value":"copyable"},{"label":"filterable","value":"filterable"},{"label":"fixed","value":"fixed"},{"label":"headerAlign","value":"headerAlign"},{"label":"innerStyle","value":"innerStyle"},{"label":"labelClassName","value":"labelClassName"},{"label":"lazyRenderAfter","value":"lazyRenderAfter"},{"label":"popOver","value":"popOver"},{"label":"quickEdit","value":"quickEdit"},{"label":"quickEditOnUpdate","value":"quickEditOnUpdate"},{"label":"remark","value":"remark"},{"label":"searchable","value":"searchable"},{"label":"sortable","value":"sortable"},{"label":"toggled","value":"toggled"},{"label":"type","value":"type"},{"label":"unique","value":"unique"},{"label":"vAlign","value":"vAlign"},{"label":"value","value":"value"},{"label":"width","value":"width"},{"label":"make","value":"make"},{"label":"permission","value":"permission"},{"label":"filteredResults","value":"filteredResults"},{"label":"macro","value":"macro"},{"label":"mixin","value":"mixin"},{"label":"hasMacro","value":"hasMacro"},{"label":"flushMacros","value":"flushMacros"},{"label":"__callStatic","value":"__callStatic"},{"label":"macroCall","value":"macroCall"}]},"form_component":{"form_component_type":"TextControl","component_property_options":[{"label":"addApi","value":"addApi"},{"label":"addControls","value":"addControls"},{"label":"addDialog","value":"addDialog"},{"label":"addOn","value":"addOn"},{"label":"autoComplete","value":"autoComplete"},{"label":"autoFill","value":"autoFill"},{"label":"borderMode","value":"borderMode"},{"label":"className","value":"className"},{"label":"clearValueOnEmpty","value":"clearValueOnEmpty"},{"label":"clearValueOnHidden","value":"clearValueOnHidden"},{"label":"clearable","value":"clearable"},{"label":"creatable","value":"creatable"},{"label":"createBtnLabel","value":"createBtnLabel"},{"label":"deferApi","value":"deferApi"},{"label":"deferField","value":"deferField"},{"label":"deleteApi","value":"deleteApi"},{"label":"deleteConfirmText","value":"deleteConfirmText"},{"label":"delimiter","value":"delimiter"},{"label":"desc","value":"desc"},{"label":"description","value":"description"},{"label":"descriptionClassName","value":"descriptionClassName"},{"label":"disabled","value":"disabled"},{"label":"disabledOn","value":"disabledOn"},{"label":"editApi","value":"editApi"},{"label":"editControls","value":"editControls"},{"label":"editDialog","value":"editDialog"},{"label":"editable","value":"editable"},{"label":"editorSetting","value":"editorSetting"},{"label":"extraName","value":"extraName"},{"label":"extractValue","value":"extractValue"},{"label":"hidden","value":"hidden"},{"label":"hiddenOn","value":"hiddenOn"},{"label":"hint","value":"hint"},{"label":"horizontal","value":"horizontal"},{"label":"id","value":"id"},{"label":"initAutoFill","value":"initAutoFill"},{"label":"initFetch","value":"initFetch"},{"label":"initFetchOn","value":"initFetchOn"},{"label":"inline","value":"inline"},{"label":"inputClassName","value":"inputClassName"},{"label":"inputControlClassName","value":"inputControlClassName"},{"label":"joinValues","value":"joinValues"},{"label":"labelAlign","value":"labelAlign"},{"label":"labelClassName","value":"labelClassName"},{"label":"labelRemark","value":"labelRemark"},{"label":"labelWidth","value":"labelWidth"},{"label":"maxLength","value":"maxLength"},{"label":"minLength","value":"minLength"},{"label":"mode","value":"mode"},{"label":"multiple","value":"multiple"},{"label":"nativeAutoComplete","value":"nativeAutoComplete"},{"label":"nativeInputClassName","value":"nativeInputClassName"},{"label":"onEvent","value":"onEvent"},{"label":"options","value":"options"},{"label":"placeholder","value":"placeholder"},{"label":"prefix","value":"prefix"},{"label":"readOnly","value":"readOnly"},{"label":"readOnlyOn","value":"readOnlyOn"},{"label":"remark","value":"remark"},{"label":"removable","value":"removable"},{"label":"required","value":"required"},{"label":"resetValue","value":"resetValue"},{"label":"row","value":"row"},{"label":"saveImmediately","value":"saveImmediately"},{"label":"selectFirst","value":"selectFirst"},{"label":"showCounter","value":"showCounter"},{"label":"size","value":"size"},{"label":"source","value":"source"},{"label":"static","value":"static"},{"label":"staticClassName","value":"staticClassName"},{"label":"staticInputClassName","value":"staticInputClassName"},{"label":"staticLabelClassName","value":"staticLabelClassName"},{"label":"staticOn","value":"staticOn"},{"label":"staticPlaceholder","value":"staticPlaceholder"},{"label":"staticSchema","value":"staticSchema"},{"label":"style","value":"style"},{"label":"submitOnChange","value":"submitOnChange"},{"label":"suffix","value":"suffix"},{"label":"testIdBuilder","value":"testIdBuilder"},{"label":"transform","value":"transform"},{"label":"trimContents","value":"trimContents"},{"label":"type","value":"type"},{"label":"useMobileUI","value":"useMobileUI"},{"label":"validateApi","value":"validateApi"},{"label":"validateOnChange","value":"validateOnChange"},{"label":"validationErrors","value":"validationErrors"},{"label":"validations","value":"validations"},{"label":"value","value":"value"},{"label":"valuesNoWrap","value":"valuesNoWrap"},{"label":"visible","value":"visible"},{"label":"visibleOn","value":"visibleOn"},{"label":"width","value":"width"},{"label":"make","value":"make"},{"label":"permission","value":"permission"},{"label":"filteredResults","value":"filteredResults"},{"label":"macro","value":"macro"},{"label":"mixin","value":"mixin"},{"label":"hasMacro","value":"hasMacro"},{"label":"flushMacros","value":"flushMacros"},{"label":"__callStatic","value":"__callStatic"},{"label":"macroCall","value":"macroCall"}],"form_component_property":[{"name":"required","value":"1"}]},"detail_component":[],"list_filter":[{"mode":"input","type":"contains","filter":{"filter_type":"TextControl","filter_property":[{"name":"size","value":"md"},{"name":"clearable","value":1}],"component_property_options":[{"label":"addApi","value":"addApi"},{"label":"addControls","value":"addControls"},{"label":"addDialog","value":"addDialog"},{"label":"addOn","value":"addOn"},{"label":"autoComplete","value":"autoComplete"},{"label":"autoFill","value":"autoFill"},{"label":"borderMode","value":"borderMode"},{"label":"className","value":"className"},{"label":"clearValueOnEmpty","value":"clearValueOnEmpty"},{"label":"clearValueOnHidden","value":"clearValueOnHidden"},{"label":"clearable","value":"clearable"},{"label":"creatable","value":"creatable"},{"label":"createBtnLabel","value":"createBtnLabel"},{"label":"deferApi","value":"deferApi"},{"label":"deferField","value":"deferField"},{"label":"deleteApi","value":"deleteApi"},{"label":"deleteConfirmText","value":"deleteConfirmText"},{"label":"delimiter","value":"delimiter"},{"label":"desc","value":"desc"},{"label":"description","value":"description"},{"label":"descriptionClassName","value":"descriptionClassName"},{"label":"disabled","value":"disabled"},{"label":"disabledOn","value":"disabledOn"},{"label":"editApi","value":"editApi"},{"label":"editControls","value":"editControls"},{"label":"editDialog","value":"editDialog"},{"label":"editable","value":"editable"},{"label":"editorSetting","value":"editorSetting"},{"label":"extraName","value":"extraName"},{"label":"extractValue","value":"extractValue"},{"label":"hidden","value":"hidden"},{"label":"hiddenOn","value":"hiddenOn"},{"label":"hint","value":"hint"},{"label":"horizontal","value":"horizontal"},{"label":"id","value":"id"},{"label":"initAutoFill","value":"initAutoFill"},{"label":"initFetch","value":"initFetch"},{"label":"initFetchOn","value":"initFetchOn"},{"label":"inline","value":"inline"},{"label":"inputClassName","value":"inputClassName"},{"label":"inputControlClassName","value":"inputControlClassName"},{"label":"joinValues","value":"joinValues"},{"label":"labelAlign","value":"labelAlign"},{"label":"labelClassName","value":"labelClassName"},{"label":"labelRemark","value":"labelRemark"},{"label":"labelWidth","value":"labelWidth"},{"label":"maxLength","value":"maxLength"},{"label":"minLength","value":"minLength"},{"label":"mode","value":"mode"},{"label":"multiple","value":"multiple"},{"label":"nativeAutoComplete","value":"nativeAutoComplete"},{"label":"nativeInputClassName","value":"nativeInputClassName"},{"label":"onEvent","value":"onEvent"},{"label":"options","value":"options"},{"label":"placeholder","value":"placeholder"},{"label":"prefix","value":"prefix"},{"label":"readOnly","value":"readOnly"},{"label":"readOnlyOn","value":"readOnlyOn"},{"label":"remark","value":"remark"},{"label":"removable","value":"removable"},{"label":"required","value":"required"},{"label":"resetValue","value":"resetValue"},{"label":"row","value":"row"},{"label":"saveImmediately","value":"saveImmediately"},{"label":"selectFirst","value":"selectFirst"},{"label":"showCounter","value":"showCounter"},{"label":"size","value":"size"},{"label":"source","value":"source"},{"label":"static","value":"static"},{"label":"staticClassName","value":"staticClassName"},{"label":"staticInputClassName","value":"staticInputClassName"},{"label":"staticLabelClassName","value":"staticLabelClassName"},{"label":"staticOn","value":"staticOn"},{"label":"staticPlaceholder","value":"staticPlaceholder"},{"label":"staticSchema","value":"staticSchema"},{"label":"style","value":"style"},{"label":"submitOnChange","value":"submitOnChange"},{"label":"suffix","value":"suffix"},{"label":"testIdBuilder","value":"testIdBuilder"},{"label":"transform","value":"transform"},{"label":"trimContents","value":"trimContents"},{"label":"type","value":"type"},{"label":"useMobileUI","value":"useMobileUI"},{"label":"validateApi","value":"validateApi"},{"label":"validateOnChange","value":"validateOnChange"},{"label":"validationErrors","value":"validationErrors"},{"label":"validations","value":"validations"},{"label":"value","value":"value"},{"label":"valuesNoWrap","value":"valuesNoWrap"},{"label":"visible","value":"visible"},{"label":"visibleOn","value":"visibleOn"},{"label":"width","value":"width"},{"label":"make","value":"make"},{"label":"permission","value":"permission"},{"label":"filteredResults","value":"filteredResults"},{"label":"macro","value":"macro"},{"label":"mixin","value":"mixin"},{"label":"hasMacro","value":"hasMacro"},{"label":"flushMacros","value":"flushMacros"},{"label":"__callStatic","value":"__callStatic"},{"label":"macroCall","value":"macroCall"}]},"input_name":"keywords"}]},"单图":{"name":"image","type":"string","default":null,"nullable":true,"comment":"单图","action_scope":["list","detail","create","edit"],"file_column":true,"list_component":{"list_component_type":"TableColumn","component_property_options":[{"label":"align","value":"align"},{"label":"breakpoint","value":"breakpoint"},{"label":"canAccessSuperData","value":"canAccessSuperData"},{"label":"className","value":"className"},{"label":"classNameExpr","value":"classNameExpr"},{"label":"copyable","value":"copyable"},{"label":"filterable","value":"filterable"},{"label":"fixed","value":"fixed"},{"label":"headerAlign","value":"headerAlign"},{"label":"innerStyle","value":"innerStyle"},{"label":"labelClassName","value":"labelClassName"},{"label":"lazyRenderAfter","value":"lazyRenderAfter"},{"label":"popOver","value":"popOver"},{"label":"quickEdit","value":"quickEdit"},{"label":"quickEditOnUpdate","value":"quickEditOnUpdate"},{"label":"remark","value":"remark"},{"label":"searchable","value":"searchable"},{"label":"sortable","value":"sortable"},{"label":"toggled","value":"toggled"},{"label":"type","value":"type"},{"label":"unique","value":"unique"},{"label":"vAlign","value":"vAlign"},{"label":"value","value":"value"},{"label":"width","value":"width"},{"label":"make","value":"make"},{"label":"permission","value":"permission"},{"label":"filteredResults","value":"filteredResults"},{"label":"macro","value":"macro"},{"label":"mixin","value":"mixin"},{"label":"hasMacro","value":"hasMacro"},{"label":"flushMacros","value":"flushMacros"},{"label":"__callStatic","value":"__callStatic"},{"label":"macroCall","value":"macroCall"}],"list_component_property":[{"name":"type","value":"image"},{"name":"enlargeAble","value":"1"}]},"form_component":{"form_component_type":"ImageControl","component_property_options":[{"label":"accept","value":"accept"},{"label":"allowInput","value":"allowInput"},{"label":"autoFill","value":"autoFill"},{"label":"autoUpload","value":"autoUpload"},{"label":"btnClassName","value":"btnClassName"},{"label":"btnUploadClassName","value":"btnUploadClassName"},{"label":"capture","value":"capture"},{"label":"className","value":"className"},{"label":"clearValueOnHidden","value":"clearValueOnHidden"},{"label":"compress","value":"compress"},{"label":"compressOptions","value":"compressOptions"},{"label":"crop","value":"crop"},{"label":"cropFormat","value":"cropFormat"},{"label":"cropQuality","value":"cropQuality"},{"label":"delimiter","value":"delimiter"},{"label":"desc","value":"desc"},{"label":"description","value":"description"},{"label":"descriptionClassName","value":"descriptionClassName"},{"label":"disabled","value":"disabled"},{"label":"disabledOn","value":"disabledOn"},{"label":"draggable","value":"draggable"},{"label":"draggableTip","value":"draggableTip"},{"label":"dropCrop","value":"dropCrop"},{"label":"editorSetting","value":"editorSetting"},{"label":"extraName","value":"extraName"},{"label":"extractValue","value":"extractValue"},{"label":"fixedSize","value":"fixedSize"},{"label":"fixedSizeClassName","value":"fixedSizeClassName"},{"label":"frameImage","value":"frameImage"},{"label":"hidden","value":"hidden"},{"label":"hiddenOn","value":"hiddenOn"},{"label":"hideUploadButton","value":"hideUploadButton"},{"label":"hint","value":"hint"},{"label":"horizontal","value":"horizontal"},{"label":"id","value":"id"},{"label":"imageClassName","value":"imageClassName"},{"label":"initAutoFill","value":"initAutoFill"},{"label":"initCrop","value":"initCrop"},{"label":"inline","value":"inline"},{"label":"inputClassName","value":"inputClassName"},{"label":"joinValues","value":"joinValues"},{"label":"labelAlign","value":"labelAlign"},{"label":"labelClassName","value":"labelClassName"},{"label":"labelRemark","value":"labelRemark"},{"label":"labelWidth","value":"labelWidth"},{"label":"limit","value":"limit"},{"label":"maxLength","value":"maxLength"},{"label":"maxSize","value":"maxSize"},{"label":"mode","value":"mode"},{"label":"multiple","value":"multiple"},{"label":"onEvent","value":"onEvent"},{"label":"placeholder","value":"placeholder"},{"label":"reCropable","value":"reCropable"},{"label":"readOnly","value":"readOnly"},{"label":"readOnlyOn","value":"readOnlyOn"},{"label":"receiver","value":"receiver"},{"label":"remark","value":"remark"},{"label":"required","value":"required"},{"label":"resetValue","value":"resetValue"},{"label":"row","value":"row"},{"label":"saveImmediately","value":"saveImmediately"},{"label":"showCompressOptions","value":"showCompressOptions"},{"label":"size","value":"size"},{"label":"src","value":"src"},{"label":"static","value":"static"},{"label":"staticClassName","value":"staticClassName"},{"label":"staticInputClassName","value":"staticInputClassName"},{"label":"staticLabelClassName","value":"staticLabelClassName"},{"label":"staticOn","value":"staticOn"},{"label":"staticPlaceholder","value":"staticPlaceholder"},{"label":"staticSchema","value":"staticSchema"},{"label":"style","value":"style"},{"label":"submitOnChange","value":"submitOnChange"},{"label":"testIdBuilder","value":"testIdBuilder"},{"label":"thumbMode","value":"thumbMode"},{"label":"thumbRatio","value":"thumbRatio"},{"label":"type","value":"type"},{"label":"uploadBtnText","value":"uploadBtnText"},{"label":"useMobileUI","value":"useMobileUI"},{"label":"validateApi","value":"validateApi"},{"label":"validateOnChange","value":"validateOnChange"},{"label":"validationErrors","value":"validationErrors"},{"label":"validations","value":"validations"},{"label":"value","value":"value"},{"label":"visible","value":"visible"},{"label":"visibleOn","value":"visibleOn"},{"label":"width","value":"width"},{"label":"make","value":"make"},{"label":"permission","value":"permission"},{"label":"filteredResults","value":"filteredResults"},{"label":"macro","value":"macro"},{"label":"mixin","value":"mixin"},{"label":"hasMacro","value":"hasMacro"},{"label":"flushMacros","value":"flushMacros"},{"label":"__callStatic","value":"__callStatic"},{"label":"macroCall","value":"macroCall"},{"label":"uploadImagePath","value":"uploadImagePath"},{"label":"uploadImage","value":"uploadImage"},{"label":"uploadFilePath","value":"uploadFilePath"},{"label":"uploadFile","value":"uploadFile"},{"label":"uploadRichPath","value":"uploadRichPath"},{"label":"uploadRich","value":"uploadRich"},{"label":"chunkUploadStart","value":"chunkUploadStart"},{"label":"chunkUpload","value":"chunkUpload"},{"label":"chunkUploadFinish","value":"chunkUploadFinish"}],"form_component_property":[{"name":"required","value":"1"}]},"detail_component":{"detail_component_type":"StaticExactControl","component_property_options":[{"label":"autoFill","value":"autoFill"},{"label":"borderMode","value":"borderMode"},{"label":"className","value":"className"},{"label":"clearValueOnHidden","value":"clearValueOnHidden"},{"label":"copyable","value":"copyable"},{"label":"desc","value":"desc"},{"label":"description","value":"description"},{"label":"descriptionClassName","value":"descriptionClassName"},{"label":"disabled","value":"disabled"},{"label":"disabledOn","value":"disabledOn"},{"label":"editorSetting","value":"editorSetting"},{"label":"extraName","value":"extraName"},{"label":"hidden","value":"hidden"},{"label":"hiddenOn","value":"hiddenOn"},{"label":"hint","value":"hint"},{"label":"horizontal","value":"horizontal"},{"label":"id","value":"id"},{"label":"initAutoFill","value":"initAutoFill"},{"label":"inline","value":"inline"},{"label":"inputClassName","value":"inputClassName"},{"label":"labelAlign","value":"labelAlign"},{"label":"labelClassName","value":"labelClassName"},{"label":"labelRemark","value":"labelRemark"},{"label":"labelWidth","value":"labelWidth"},{"label":"mode","value":"mode"},{"label":"onEvent","value":"onEvent"},{"label":"placeholder","value":"placeholder"},{"label":"popOver","value":"popOver"},{"label":"quickEdit","value":"quickEdit"},{"label":"readOnly","value":"readOnly"},{"label":"readOnlyOn","value":"readOnlyOn"},{"label":"remark","value":"remark"},{"label":"required","value":"required"},{"label":"row","value":"row"},{"label":"saveImmediately","value":"saveImmediately"},{"label":"size","value":"size"},{"label":"static","value":"static"},{"label":"staticClassName","value":"staticClassName"},{"label":"staticInputClassName","value":"staticInputClassName"},{"label":"staticLabelClassName","value":"staticLabelClassName"},{"label":"staticOn","value":"staticOn"},{"label":"staticPlaceholder","value":"staticPlaceholder"},{"label":"staticSchema","value":"staticSchema"},{"label":"style","value":"style"},{"label":"submitOnChange","value":"submitOnChange"},{"label":"testIdBuilder","value":"testIdBuilder"},{"label":"text","value":"text"},{"label":"tpl","value":"tpl"},{"label":"type","value":"type"},{"label":"useMobileUI","value":"useMobileUI"},{"label":"validateApi","value":"validateApi"},{"label":"validateOnChange","value":"validateOnChange"},{"label":"validationErrors","value":"validationErrors"},{"label":"validations","value":"validations"},{"label":"value","value":"value"},{"label":"visible","value":"visible"},{"label":"visibleOn","value":"visibleOn"},{"label":"width","value":"width"},{"label":"make","value":"make"},{"label":"permission","value":"permission"},{"label":"filteredResults","value":"filteredResults"},{"label":"macro","value":"macro"},{"label":"mixin","value":"mixin"},{"label":"hasMacro","value":"hasMacro"},{"label":"flushMacros","value":"flushMacros"},{"label":"__callStatic","value":"__callStatic"},{"label":"macroCall","value":"macroCall"}],"detail_component_property":[{"name":"type","value":"static-image"},{"name":"enlargeAble","value":"1"}]},"file_column_multi":0},"排序":{"type":"integer","comment":"排序","action_scope":["list","detail","create","edit"],"file_column":0,"list_component":[],"form_component":{"form_component_type":"NumberControl","component_property_options":[{"label":"autoFill","value":"autoFill"},{"label":"big","value":"big"},{"label":"borderMode","value":"borderMode"},{"label":"className","value":"className"},{"label":"clearValueOnHidden","value":"clearValueOnHidden"},{"label":"desc","value":"desc"},{"label":"description","value":"description"},{"label":"descriptionClassName","value":"descriptionClassName"},{"label":"disabled","value":"disabled"},{"label":"disabledOn","value":"disabledOn"},{"label":"displayMode","value":"displayMode"},{"label":"editorSetting","value":"editorSetting"},{"label":"extraName","value":"extraName"},{"label":"hidden","value":"hidden"},{"label":"hiddenOn","value":"hiddenOn"},{"label":"hint","value":"hint"},{"label":"horizontal","value":"horizontal"},{"label":"id","value":"id"},{"label":"initAutoFill","value":"initAutoFill"},{"label":"inline","value":"inline"},{"label":"inputClassName","value":"inputClassName"},{"label":"keyboard","value":"keyboard"},{"label":"kilobitSeparator","value":"kilobitSeparator"},{"label":"labelAlign","value":"labelAlign"},{"label":"labelClassName","value":"labelClassName"},{"label":"labelRemark","value":"labelRemark"},{"label":"labelWidth","value":"labelWidth"},{"label":"max","value":"max"},{"label":"min","value":"min"},{"label":"mode","value":"mode"},{"label":"onEvent","value":"onEvent"},{"label":"placeholder","value":"placeholder"},{"label":"precision","value":"precision"},{"label":"prefix","value":"prefix"},{"label":"readOnly","value":"readOnly"},{"label":"readOnlyOn","value":"readOnlyOn"},{"label":"remark","value":"remark"},{"label":"required","value":"required"},{"label":"row","value":"row"},{"label":"saveImmediately","value":"saveImmediately"},{"label":"showAsPercent","value":"showAsPercent"},{"label":"showSteps","value":"showSteps"},{"label":"size","value":"size"},{"label":"static","value":"static"},{"label":"staticClassName","value":"staticClassName"},{"label":"staticInputClassName","value":"staticInputClassName"},{"label":"staticLabelClassName","value":"staticLabelClassName"},{"label":"staticOn","value":"staticOn"},{"label":"staticPlaceholder","value":"staticPlaceholder"},{"label":"staticSchema","value":"staticSchema"},{"label":"step","value":"step"},{"label":"style","value":"style"},{"label":"submitOnChange","value":"submitOnChange"},{"label":"suffix","value":"suffix"},{"label":"testIdBuilder","value":"testIdBuilder"},{"label":"type","value":"type"},{"label":"unitOptions","value":"unitOptions"},{"label":"useMobileUI","value":"useMobileUI"},{"label":"validateApi","value":"validateApi"},{"label":"validateOnChange","value":"validateOnChange"},{"label":"validationErrors","value":"validationErrors"},{"label":"validations","value":"validations"},{"label":"value","value":"value"},{"label":"visible","value":"visible"},{"label":"visibleOn","value":"visibleOn"},{"label":"width","value":"width"},{"label":"make","value":"make"},{"label":"permission","value":"permission"},{"label":"filteredResults","value":"filteredResults"},{"label":"macro","value":"macro"},{"label":"mixin","value":"mixin"},{"label":"hasMacro","value":"hasMacro"},{"label":"flushMacros","value":"flushMacros"},{"label":"__callStatic","value":"__callStatic"},{"label":"macroCall","value":"macroCall"}],"form_component_property":[{"name":"required","value":"1"},{"name":"value","value":"0"},{"name":"min","value":"0"},{"name":"max","value":"999999"},{"name":"description","value":"越大越靠前"}]},"detail_component":[],"name":"custom_order","default":"0"},"是否启用":{"type":"tinyInteger","comment":"是否启用","action_scope":["list","detail","create","edit"],"file_column":0,"list_component":{"list_component_type":"TableColumn","list_component_property":[{"name":"quickEdit","value":"{\"type\":\"switch\",\"mode\":\"inline\",\"saveImmediately\":true}"}]},"form_component":{"form_component_type":"SwitchControl","form_component_property":[{"name":"value","value":"1"}]},"detail_component":{"detail_component_type":"StaticExactControl","detail_component_property":[{"name":"type","value":"static-status"}]},"name":"enabled","default":"1","list_filter":[{"mode":"input","type":"equal","filter":{"filter_type":"SelectControl","filter_property":[{"name":"size","value":"md"},{"name":"clearable","value":"1"},{"name":"options","value":"[{\"value\":1,\"label\":\"是\"},{\"value\":0,\"label\":\"否\"}]"}]},"input_name":"enabled"}]},"多图":{"name":"images","type":"text","default":null,"nullable":true,"comment":"多图","action_scope":["list","detail","create","edit"],"file_column":true,"list_component":{"list_component_type":"TableColumn","list_component_property":[{"name":"type","value":"images"},{"name":"enlargeAble","value":"1"}]},"form_component":{"form_component_type":"ImageControl","form_component_property":[{"name":"required","value":"1"},{"name":"multiple","value":"1"}]},"detail_component":{"detail_component_type":"StaticExactControl","detail_component_property":[{"name":"type","value":"static-images"},{"name":"enlargeAble","value":"1"}]},"file_column_multi":true}}',
            'detail_component_property' => '[{"key":"StaticExactControl","value":[{"name":"type","value":"static-image"},{"name":"enlargeAble","value":"1"}],"label":"单图"},{"key":"StaticExactControl","value":[{"name":"type","value":"static-images"},{"name":"enlargeAble","value":"1"}],"label":"多图"}]',
            'filter_property'           => '[{"key":"TextControl","value":[{"name":"size","value":"md"},{"name":"clearable","value":1}],"label":"文本"},{"key":"SelectControl","value":[{"name":"size","value":"md"},{"name":"clearable","value":"1"},{"name":"options","value":"[{\"value\":1,\"label\":\"是\"},{\"value\":0,\"label\":\"否\"}]"}],"label":"是/否"}]',
            'form_component_property'   => '[{"key":"TextControl","value":[{"name":"required","value":"1"}],"label":"文本(必填)"},{"key":"NumberControl","value":[{"name":"required","value":"1"},{"name":"value","value":"0"},{"name":"min","value":"0"},{"name":"max","value":"999999"},{"name":"description","value":"越大越靠前"}],"label":"排序字段"}]',
            'list_component_property'   => '[{"key":"TableColumn","value":[{"name":"searchable","value":"1"}],"label":"文本(带搜索)"},{"key":"TableColumn","value":[{"name":"type","value":"image"},{"name":"enlargeAble","value":"1"}],"label":"单图"},{"key":"TableColumn","value":[{"name":"quickEdit","value":"{\"type\":\"switch\",\"mode\":\"inline\",\"saveImmediately\":true}"}],"label":"开关"}]',
        ];

        settings()->setMany(array_map(fn($i)=>json_decode($i, true), $data));
    }
}
