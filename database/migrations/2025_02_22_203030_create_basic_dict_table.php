<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Slowlyo\OwlAdmin\Models\BasicDict;

return new class extends Migration
{
    private $table = 'basic_dict';

    /**
     * 执行迁移
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable($this->table)) {
            //备份
            Schema::rename($this->table, 'backup_' . $this->table . '_' .date('YmdHis'));
            //删除
            Schema::dropIfExists($this->table);
        }
        //创建
        Schema::create($this->table, function (Blueprint $table) {
            $table->comment('基础-数据字典表');
            $table->id();
            $table->string('parent_id')->default(0)->comment('父级ID')->index();
            $table->string('key')->comment('编码/键名')->index();
            $table->tinyInteger('enabled')->default(1)->comment('是否启用')->index();
            $table->integer('sort')->default(0)->comment('排序')->index();
            $table->string('value')->comment('名称/键值');
            $table->string('module')->nullable()->comment('模块');
            $table->index(['id','parent_id','key','sort']);
            $table->unique(['key','value','module']);
            $table->timestamps();
            $table->softDeletes();
        });
        $this->fillInitialData();
    }

    /**
     * 迁移回滚
     * Reverse the migrations.
     */
    public function down(): void
    {
        //删除 reverse
        Schema::dropIfExists($this->table);
    }

    /**
     * 填充初始数据
     *
     * @return void
     */
    public function fillInitialData()
    {
        $basicRegion = new BasicDict;
        // 创建初始角色
        $basicRegion->truncate();
        $basicRegion->insert([
            ['id'=>1, 'parent_id'=>0, 'key'=>'daga.filesystem.driver', 'enabled'=>1, 'sort'=>0, 'value'=>'文件系统驱动'],
            ['id'=>2, 'parent_id'=>1, 'key'=>'local', 'enabled'=>1, 'sort'=>0, 'value'=>'本地存储'],
            ['id'=>3, 'parent_id'=>1, 'key'=>'kodo', 'enabled'=>1, 'sort'=>0, 'value'=>'七牛云kodo'],
            ['id'=>4, 'parent_id'=>1, 'key'=>'cos', 'enabled'=>1, 'sort'=>0, 'value'=>'腾讯云COS'],
            ['id'=>5, 'parent_id'=>1, 'key'=>'oss', 'enabled'=>1, 'sort'=>0, 'value'=>'阿里云OSS'],
            ['id'=>6, 'parent_id'=>0, 'key'=>'erp.purchase.status', 'enabled'=>1, 'sort'=>0, 'value'=>'采购状态'],
            ['id'=>7, 'parent_id'=>6, 'key'=>'0', 'enabled'=>1, 'sort'=>0, 'value'=>'待审核'],
            ['id'=>8, 'parent_id'=>6, 'key'=>'1', 'enabled'=>1, 'sort'=>0, 'value'=>'采购中'],
            ['id'=>9, 'parent_id'=>6, 'key'=>'2', 'enabled'=>1, 'sort'=>0, 'value'=>'入库中'],
            ['id'=>10, 'parent_id'=>6, 'key'=>'3', 'enabled'=>1, 'sort'=>0, 'value'=>'已完成'],
            ['id'=>11, 'parent_id'=>6, 'key'=>'4', 'enabled'=>1, 'sort'=>0, 'value'=>'已拒绝'],
            ['id'=>12, 'parent_id'=>6, 'key'=>'5', 'enabled'=>1, 'sort'=>0, 'value'=>'待提交'],
            ['id'=>13, 'parent_id'=>0, 'key'=>'erp.purchase.pay_type', 'enabled'=>1, 'sort'=>0, 'value'=>'采购支付类型'],
            ['id'=>14, 'parent_id'=>13, 'key'=>'0', 'enabled'=>1, 'sort'=>0, 'value'=>'未确定'],
            ['id'=>15, 'parent_id'=>13, 'key'=>'1', 'enabled'=>1, 'sort'=>0, 'value'=>'账期结算'],
            ['id'=>16, 'parent_id'=>13, 'key'=>'2', 'enabled'=>1, 'sort'=>0, 'value'=>'预付款'],
            ['id'=>17, 'parent_id'=>13, 'key'=>'3', 'enabled'=>1, 'sort'=>0, 'value'=>'银行转账'],
            ['id'=>18, 'parent_id'=>13, 'key'=>'4', 'enabled'=>1, 'sort'=>0, 'value'=>'现金支付'],
            ['id'=>19, 'parent_id'=>13, 'key'=>'5', 'enabled'=>1, 'sort'=>0, 'value'=>'在线支付'],
            ['id'=>20, 'parent_id'=>13, 'key'=>'6', 'enabled'=>1, 'sort'=>0, 'value'=>'其他方式'],
            ['id'=>21, 'parent_id'=>0, 'key'=>'erp.goods.status', 'enabled'=>1, 'sort'=>0, 'value'=>'商品状态'],
            ['id'=>22, 'parent_id'=>21, 'key'=>'1', 'enabled'=>1, 'sort'=>0, 'value'=>'正常'],
            ['id'=>23, 'parent_id'=>21, 'key'=>'2', 'enabled'=>1, 'sort'=>0, 'value'=>'下架'],
            ['id'=>24, 'parent_id'=>21, 'key'=>'3', 'enabled'=>1, 'sort'=>0, 'value'=>'停售'],
            ['id'=>25, 'parent_id'=>21, 'key'=>'4', 'enabled'=>1, 'sort'=>0, 'value'=>'停产'],
            ['id'=>26, 'parent_id'=>0, 'key'=>'erp.goods.audit_status', 'enabled'=>1, 'sort'=>0, 'value'=>'商品审核状态'],
            ['id'=>27, 'parent_id'=>26, 'key'=>'0', 'enabled'=>1, 'sort'=>0, 'value'=>'待审核'],
            ['id'=>28, 'parent_id'=>26, 'key'=>'1', 'enabled'=>1, 'sort'=>0, 'value'=>'已通过'],
            ['id'=>29, 'parent_id'=>26, 'key'=>'2', 'enabled'=>1, 'sort'=>0, 'value'=>'已拒绝'],
            ['id'=>30, 'parent_id'=>0, 'key'=>'system.basic.state', 'enabled'=>1, 'sort'=>0, 'value'=>'启用状态'],
            ['id'=>31, 'parent_id'=>30, 'key'=>'0', 'enabled'=>1, 'sort'=>1, 'value'=>'关闭'],
            ['id'=>32, 'parent_id'=>30, 'key'=>'1', 'enabled'=>1, 'sort'=>0, 'value'=>'开启'],
            ['id'=>33, 'parent_id'=>0, 'key'=>'open.auth.audit_status', 'enabled'=>1, 'sort'=>0, 'value'=>'认证审核状态'],
            ['id'=>34, 'parent_id'=>33, 'key'=>'0', 'enabled'=>1, 'sort'=>2, 'value'=>'待审'],
            ['id'=>35, 'parent_id'=>33, 'key'=>'1', 'enabled'=>1, 'sort'=>1, 'value'=>'通过'],
            ['id'=>36, 'parent_id'=>33, 'key'=>'2', 'enabled'=>1, 'sort'=>0, 'value'=>'驳回'],
            ['id'=>37, 'parent_id'=>0, 'key'=>'system.basic.level', 'enabled'=>1, 'sort'=>0, 'value'=>'会员等级'],
            ['id'=>38, 'parent_id'=>37, 'key'=>'1', 'enabled'=>1, 'sort'=>1, 'value'=>'普通'],
            ['id'=>39, 'parent_id'=>37, 'key'=>'2', 'enabled'=>1, 'sort'=>2, 'value'=>'VIP'],
            ['id'=>40, 'parent_id'=>37, 'key'=>'3', 'enabled'=>1, 'sort'=>3, 'value'=>'SVIP']

        ]);
    }

};
