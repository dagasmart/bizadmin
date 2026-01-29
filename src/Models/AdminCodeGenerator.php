<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:22              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\143\157\x6c\x75\x6d\x6e\163" => "\x61\162\x72\x61\171", "\x6e\x65\145\144\x73" => "\141\x72\x72\x61\171", "\155\x65\x6e\165\137\151\x6e\x66\x6f" => "\x61\162\162\141\171", "\x70\x61\x67\x65\137\151\x6e\146\x6f" => "\x61\x72\162\141\171", "\163\141\166\145\137\160\x61\x74\150" => "\141\x72\x72\141\x79"); public static function dbOption() { return [["\x6c\x61\x62\x65\x6c" => "\xe6\234\254\xe5\234\260\347\xb3\273\xe7\xbb\237\xe5\272\x93", "\x76\x61\x6c\x75\145" => null], ["\x6c\x61\x62\x65\x6c" => "\xe5\225\x86\xe4\270\232\345\272\223\x20\142\151\172", "\166\141\x6c\x75\145" => "\x62\x69\172"], ["\x6c\141\x62\145\154" => "\346\xb5\213\350\257\x95\345\xba\x93\40\x62\x75\x73", "\x76\141\154\x75\145" => "\142\165\x73"], ["\x6c\x61\142\x65\154" => "\345\274\200\345\x8f\x91\xe5\272\x93\x20\x64\145\166", "\x76\141\x6c\x75\145" => "\x64\x65\166"]]; } }
