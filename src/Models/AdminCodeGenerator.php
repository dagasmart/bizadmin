<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\x6f\x6c\165\x6d\156\x73" => "\141\162\162\x61\x79", "\x6e\x65\145\144\x73" => "\x61\162\162\141\x79", "\155\145\x6e\x75\137\151\156\x66\x6f" => "\141\x72\162\x61\x79", "\x70\x61\147\145\x5f\x69\156\x66\x6f" => "\141\162\162\141\x79", "\163\141\x76\145\137\x70\x61\164\x68" => "\x61\162\x72\x61\171"); public static function dbOption() { return [["\154\141\142\x65\x6c" => "\xe6\234\254\345\x9c\xb0\347\263\xbb\347\273\x9f\345\272\x93", "\x76\141\x6c\x75\145" => null], ["\x6c\x61\x62\x65\x6c" => "\xe5\225\206\xe4\xb8\x9a\345\xba\223\40\x62\151\x7a", "\166\141\x6c\x75\145" => "\x62\x69\x7a"], ["\x6c\141\142\x65\x6c" => "\346\265\x8b\350\xaf\225\345\xba\223\40\x62\165\x73", "\x76\x61\154\x75\145" => "\142\165\163"], ["\x6c\x61\142\x65\154" => "\345\xbc\x80\xe5\217\221\xe5\xba\223\40\x64\x65\166", "\x76\x61\154\x75\145" => "\144\145\x76"]]; } }
