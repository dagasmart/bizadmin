<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:58              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\143\x6f\154\x75\x6d\x6e\163" => "\141\162\x72\x61\x79", "\x6e\145\145\144\x73" => "\x61\x72\x72\x61\171", "\155\x65\x6e\x75\137\151\156\x66\157" => "\141\162\x72\x61\x79", "\160\x61\x67\145\137\x69\x6e\146\157" => "\141\162\x72\x61\x79", "\x73\141\x76\x65\x5f\x70\x61\164\150" => "\141\x72\162\141\171"); public static function dbOption() { return [["\154\141\142\145\x6c" => "\xe6\x9c\254\345\234\xb0\347\263\273\347\273\x9f\xe5\xba\x93", "\166\141\x6c\165\145" => null], ["\x6c\141\x62\x65\154" => "\xe5\x95\206\xe4\270\x9a\345\xba\x93\x20\142\151\x7a", "\166\141\x6c\x75\145" => "\x62\x69\x7a"], ["\154\141\x62\x65\154" => "\346\xb5\x8b\xe8\257\225\xe5\xba\223\x20\142\x75\x73", "\166\x61\154\x75\x65" => "\x62\x75\163"], ["\x6c\141\142\145\x6c" => "\xe5\xbc\200\345\x8f\221\345\xba\223\40\x64\x65\x76", "\x76\141\x6c\165\x65" => "\x64\x65\x76"]]; } }
