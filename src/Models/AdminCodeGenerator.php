<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:28              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\x6f\154\165\x6d\x6e\x73" => "\141\x72\162\141\x79", "\x6e\145\x65\144\x73" => "\141\x72\x72\x61\171", "\155\145\156\165\x5f\151\156\146\157" => "\x61\x72\162\141\x79", "\x70\x61\147\x65\137\151\x6e\146\157" => "\141\162\x72\x61\171", "\x73\x61\x76\x65\x5f\160\x61\x74\x68" => "\x61\162\x72\141\x79"); public static function dbOption() { return [["\154\141\142\145\154" => "\xe6\x9c\xac\xe5\x9c\260\347\263\273\347\xbb\x9f\345\xba\x93", "\166\x61\x6c\x75\x65" => null], ["\154\141\x62\145\154" => "\345\x95\x86\344\xb8\x9a\345\272\223\40\142\x69\172", "\166\141\x6c\x75\x65" => "\x62\x69\x7a"], ["\154\141\142\145\x6c" => "\346\xb5\x8b\xe8\257\x95\xe5\xba\x93\40\142\165\163", "\166\141\154\165\145" => "\142\165\x73"], ["\154\141\142\145\x6c" => "\345\274\x80\345\217\221\345\xba\x93\40\x64\x65\x76", "\166\x61\x6c\165\145" => "\144\145\166"]]; } }
