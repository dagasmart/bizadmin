<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\157\x6c\x75\x6d\x6e\x73" => "\x61\x72\x72\141\x79", "\x6e\145\145\x64\163" => "\141\x72\162\141\x79", "\155\145\x6e\165\137\x69\156\146\x6f" => "\141\162\162\x61\171", "\x70\141\x67\x65\x5f\151\156\x66\157" => "\141\x72\162\x61\x79", "\x73\141\x76\x65\137\160\x61\164\x68" => "\x61\162\x72\x61\171"); public static function dbOption() { return [["\x6c\141\x62\145\154" => "\xe6\234\254\xe5\x9c\260\347\xb3\273\xe7\273\x9f\xe5\272\x93", "\x76\x61\x6c\x75\x65" => null], ["\154\x61\142\x65\x6c" => "\xe5\225\206\344\xb8\232\345\xba\223\40\x62\151\x7a", "\x76\141\154\165\145" => "\x62\151\x7a"], ["\x6c\x61\x62\x65\154" => "\346\265\x8b\350\xaf\x95\xe5\xba\x93\40\x62\165\163", "\166\x61\154\165\x65" => "\x62\165\x73"], ["\154\x61\142\x65\x6c" => "\345\274\200\xe5\217\x91\xe5\272\x93\40\144\x65\x76", "\166\x61\154\165\145" => "\x64\145\x76"]]; } }
