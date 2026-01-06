<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\157\x6c\165\155\156\x73" => "\141\162\x72\141\x79", "\156\x65\x65\144\x73" => "\141\162\x72\141\x79", "\x6d\x65\x6e\x75\137\x69\156\146\157" => "\x61\162\x72\141\171", "\160\x61\147\x65\x5f\x69\156\x66\x6f" => "\141\x72\x72\x61\171", "\x73\x61\166\145\137\160\x61\x74\150" => "\141\162\162\x61\171"); public static function dbOption() { return [["\x6c\141\142\145\x6c" => "\346\234\254\xe5\x9c\xb0\347\xb3\273\347\273\x9f\xe5\272\223", "\166\141\154\x75\145" => null], ["\x6c\141\142\145\x6c" => "\345\x95\x86\344\270\232\xe5\272\223\x20\142\x69\x7a", "\166\141\x6c\165\x65" => "\142\151\x7a"], ["\154\141\142\145\154" => "\346\265\213\xe8\xaf\x95\xe5\272\223\40\142\x75\x73", "\x76\141\154\165\145" => "\x62\x75\x73"], ["\x6c\141\x62\145\x6c" => "\xe5\274\x80\345\x8f\x91\345\xba\223\40\144\x65\166", "\x76\141\154\165\145" => "\144\x65\x76"]]; } }
