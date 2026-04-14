<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\x63\x6f\x6c\x75\155\x6e\x73" => "\141\162\x72\x61\x79", "\156\x65\x65\x64\163" => "\141\x72\162\141\x79", "\x6d\x65\156\165\x5f\x69\x6e\x66\157" => "\141\x72\x72\141\171", "\160\x61\147\x65\137\151\156\x66\157" => "\x61\x72\x72\141\171", "\x73\x61\166\145\x5f\x70\141\x74\150" => "\x61\162\162\x61\x79"); public static function dbOption() { return [["\154\x61\x62\x65\x6c" => "\346\234\254\xe5\234\xb0\xe7\263\xbb\xe7\273\237\xe5\xba\x93", "\x76\141\154\165\x65" => null], ["\154\141\142\x65\154" => "\345\225\206\344\xb8\232\xe5\272\223\x20\x62\x69\x7a", "\x76\x61\x6c\x75\x65" => "\x62\151\x7a"], ["\x6c\x61\142\x65\154" => "\xe6\xb5\213\xe8\257\x95\345\272\223\x20\x62\165\163", "\166\141\x6c\165\x65" => "\142\165\x73"], ["\154\x61\142\145\154" => "\345\xbc\x80\xe5\217\x91\xe5\272\223\40\x64\x65\x76", "\166\x61\x6c\x75\x65" => "\144\x65\166"]]; } }
