<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\157\x6c\x75\x6d\x6e\x73" => "\x61\x72\162\x61\171", "\156\x65\x65\x64\163" => "\x61\162\x72\141\171", "\155\145\156\x75\137\x69\156\146\157" => "\141\162\162\141\171", "\x70\x61\x67\x65\x5f\x69\156\x66\x6f" => "\141\162\x72\141\x79", "\163\141\166\145\x5f\160\141\164\x68" => "\141\162\x72\141\171"); public static function dbOption() { return [["\154\x61\x62\x65\154" => "\346\x9c\xac\xe5\234\260\xe7\263\xbb\xe7\273\237\xe5\xba\223", "\166\141\154\165\145" => null], ["\x6c\x61\142\145\154" => "\xe5\x95\206\344\xb8\232\xe5\xba\x93\40\x62\x69\172", "\x76\141\x6c\165\x65" => "\142\x69\x7a"], ["\x6c\141\x62\145\x6c" => "\xe6\265\213\xe8\xaf\225\345\272\223\40\x62\x75\163", "\x76\141\x6c\x75\x65" => "\142\x75\163"], ["\154\141\142\145\x6c" => "\345\xbc\200\xe5\217\221\345\272\x93\x20\144\145\166", "\x76\141\x6c\x75\x65" => "\x64\x65\166"]]; } }
