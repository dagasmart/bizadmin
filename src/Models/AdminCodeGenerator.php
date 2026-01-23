<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\143\157\154\165\x6d\156\x73" => "\141\x72\162\141\171", "\156\145\145\x64\x73" => "\x61\x72\x72\x61\x79", "\155\x65\x6e\165\137\151\156\x66\157" => "\x61\162\x72\141\171", "\x70\141\x67\x65\137\151\156\x66\x6f" => "\x61\162\x72\x61\x79", "\x73\141\x76\x65\x5f\160\x61\164\150" => "\141\162\x72\141\x79"); public static function dbOption() { return [["\x6c\x61\x62\145\x6c" => "\346\x9c\254\xe5\234\260\347\xb3\xbb\347\xbb\237\xe5\272\x93", "\x76\x61\x6c\165\145" => null], ["\154\141\142\x65\x6c" => "\345\x95\206\344\xb8\232\xe5\xba\223\40\x62\151\172", "\x76\141\154\x75\x65" => "\x62\151\x7a"], ["\154\x61\142\145\154" => "\xe6\265\213\350\xaf\x95\345\272\x93\x20\142\165\x73", "\x76\x61\x6c\x75\145" => "\142\x75\163"], ["\x6c\141\x62\145\154" => "\345\274\x80\xe5\217\x91\xe5\272\x93\40\144\145\x76", "\x76\141\x6c\x75\145" => "\x64\145\166"]]; } }
