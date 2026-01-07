<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:04              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\157\x6c\165\x6d\156\163" => "\x61\x72\162\x61\171", "\156\145\145\x64\x73" => "\141\x72\x72\141\171", "\x6d\145\156\165\137\151\156\x66\157" => "\141\x72\x72\141\x79", "\160\x61\x67\145\137\x69\156\x66\157" => "\141\162\x72\141\x79", "\x73\141\166\145\x5f\160\x61\164\150" => "\x61\x72\162\141\171"); public static function dbOption() { return [["\x6c\141\142\145\154" => "\346\x9c\xac\345\234\xb0\347\263\273\347\273\x9f\345\272\x93", "\166\141\154\x75\145" => null], ["\x6c\x61\142\145\154" => "\345\x95\206\xe4\xb8\x9a\345\272\223\40\142\151\172", "\x76\141\x6c\x75\145" => "\142\151\172"], ["\154\x61\x62\145\x6c" => "\xe6\265\x8b\350\xaf\225\345\272\x93\40\142\x75\x73", "\x76\x61\154\x75\x65" => "\x62\165\163"], ["\x6c\x61\142\145\x6c" => "\345\274\200\345\217\x91\345\xba\223\40\144\145\x76", "\166\141\x6c\165\x65" => "\144\145\166"]]; } }
