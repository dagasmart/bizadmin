<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Support\Facades\DB; use DagaSmart\BizAdmin\Traits\CommonTrait; use Illuminate\Database\Eloquent\SoftDeletes; class SystemMerchantModule extends BaseModel { use CommonTrait, SoftDeletes; protected $table = "\x73\171\163\x74\x65\155\x5f\155\x65\162\143\x68\x61\x6e\164\x5f\x6d\157\144\x75\x6c\145"; public function stateOption() { return [["\x6c\x61\142\145\154" => "\346\230\xaf", "\x76\141\x6c\x75\x65" => 1], ["\154\x61\142\x65\154" => "\345\x90\xa6", "\x76\141\154\x75\x65" => 0]]; } }
