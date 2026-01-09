<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:42              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\x6f\154\x75\155\x6e\x73" => "\x61\162\162\141\171", "\x6e\x65\145\144\163" => "\141\x72\162\x61\171", "\155\145\x6e\x75\137\x69\156\x66\x6f" => "\x61\x72\162\x61\171", "\x70\x61\147\x65\x5f\151\156\146\157" => "\x61\x72\162\141\x79", "\x73\x61\166\145\137\160\x61\x74\x68" => "\141\162\162\x61\171"); public static function dbOption() { return [["\154\x61\142\145\x6c" => "\346\x9c\254\xe5\234\260\xe7\xb3\xbb\347\xbb\x9f\xe5\xba\223", "\x76\141\x6c\165\x65" => null], ["\154\141\142\x65\x6c" => "\345\x95\x86\xe4\270\x9a\345\xba\223\40\142\151\172", "\x76\141\154\165\145" => "\142\x69\x7a"], ["\x6c\x61\x62\145\x6c" => "\xe6\xb5\x8b\350\xaf\x95\345\272\223\x20\142\x75\163", "\166\x61\154\165\x65" => "\142\x75\163"], ["\154\x61\142\145\154" => "\345\274\x80\345\x8f\x91\345\xba\x93\x20\x64\145\166", "\166\141\x6c\x75\145" => "\x64\x65\166"]]; } }
