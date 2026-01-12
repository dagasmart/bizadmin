<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\x6f\154\x75\155\x6e\x73" => "\x61\x72\x72\141\x79", "\156\145\145\x64\163" => "\141\x72\x72\x61\x79", "\x6d\x65\x6e\165\x5f\x69\156\146\157" => "\x61\x72\162\141\x79", "\160\141\147\x65\137\151\x6e\x66\x6f" => "\141\x72\162\x61\x79", "\x73\141\x76\145\x5f\x70\x61\x74\x68" => "\x61\x72\x72\141\x79"); public static function dbOption() { return [["\x6c\x61\142\145\x6c" => "\xe6\x9c\xac\345\234\xb0\xe7\xb3\273\xe7\xbb\237\xe5\xba\x93", "\166\x61\x6c\x75\x65" => null], ["\x6c\x61\142\x65\x6c" => "\xe5\x95\206\xe4\270\x9a\xe5\xba\x93\x20\142\151\172", "\166\x61\154\x75\145" => "\142\x69\x7a"], ["\154\x61\142\x65\154" => "\xe6\xb5\213\350\257\225\345\272\223\x20\x62\165\163", "\166\141\154\165\x65" => "\142\x75\x73"], ["\x6c\141\x62\145\x6c" => "\345\xbc\200\xe5\217\x91\345\xba\223\x20\x64\145\166", "\x76\x61\x6c\x75\x65" => "\144\145\166"]]; } }
