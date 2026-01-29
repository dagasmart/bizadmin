<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\143\x6f\154\x75\x6d\x6e\163" => "\141\162\x72\x61\x79", "\156\145\x65\144\163" => "\141\162\x72\x61\x79", "\x6d\145\156\x75\x5f\x69\156\146\157" => "\x61\162\162\x61\x79", "\x70\x61\x67\145\137\151\x6e\146\157" => "\x61\x72\162\141\x79", "\163\141\x76\x65\137\x70\x61\x74\x68" => "\x61\162\162\x61\x79"); public static function dbOption() { return [["\x6c\141\142\x65\x6c" => "\346\x9c\xac\xe5\x9c\260\347\xb3\xbb\347\xbb\x9f\345\272\223", "\x76\x61\154\x75\145" => null], ["\x6c\x61\142\145\154" => "\345\x95\206\344\xb8\232\345\272\223\x20\x62\x69\x7a", "\166\141\x6c\x75\x65" => "\142\151\x7a"], ["\x6c\141\x62\145\154" => "\346\xb5\213\xe8\xaf\225\345\xba\223\x20\142\165\163", "\166\x61\154\165\x65" => "\142\165\x73"], ["\154\141\142\145\154" => "\345\274\x80\xe5\217\221\345\xba\x93\40\144\145\166", "\166\x61\x6c\x75\145" => "\144\145\x76"]]; } }
