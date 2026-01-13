<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\x6f\x6c\165\155\x6e\163" => "\x61\162\162\141\x79", "\x6e\x65\x65\144\163" => "\x61\162\162\x61\x79", "\155\145\x6e\165\137\x69\156\x66\x6f" => "\141\162\162\141\x79", "\160\x61\x67\x65\x5f\x69\x6e\x66\157" => "\141\x72\162\x61\x79", "\x73\141\x76\x65\137\160\141\164\150" => "\x61\x72\162\x61\171"); public static function dbOption() { return [["\x6c\141\142\x65\154" => "\xe6\234\xac\345\x9c\xb0\347\xb3\xbb\347\xbb\x9f\345\xba\x93", "\166\141\x6c\165\x65" => null], ["\x6c\x61\x62\145\x6c" => "\xe5\225\x86\344\270\232\xe5\272\x93\40\142\x69\172", "\x76\141\154\165\x65" => "\x62\x69\x7a"], ["\x6c\x61\142\x65\154" => "\346\265\x8b\xe8\257\x95\345\xba\223\x20\142\x75\163", "\166\x61\x6c\165\145" => "\x62\x75\x73"], ["\154\x61\x62\145\x6c" => "\xe5\274\200\345\x8f\221\xe5\272\223\40\x64\x65\x76", "\x76\141\154\165\145" => "\x64\x65\166"]]; } }
