<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; use Illuminate\Support\Facades\DB; class AdminCodeGenerator extends BaseModel { use HasTimestamps; protected $casts = array("\143\x6f\x6c\165\x6d\156\x73" => "\141\x72\x72\141\x79", "\156\145\x65\x64\x73" => "\x61\162\162\x61\171", "\x6d\145\x6e\x75\x5f\151\x6e\146\x6f" => "\x61\162\162\141\x79", "\160\x61\x67\x65\x5f\151\156\146\x6f" => "\x61\x72\162\x61\171", "\x73\141\166\145\x5f\160\141\164\150" => "\x61\162\x72\141\171"); public static function dbOption() { return [["\x6c\141\x62\145\154" => "\xe6\234\254\xe5\x9c\260\xe7\xb3\xbb\xe7\xbb\x9f\xe5\272\223", "\166\x61\154\165\x65" => null], ["\x6c\141\142\x65\x6c" => "\xe5\x95\x86\344\270\232\xe5\272\223\40\142\x69\x7a", "\166\x61\x6c\x75\x65" => "\x62\151\172"], ["\x6c\141\142\x65\154" => "\346\265\213\xe8\257\225\xe5\272\223\40\142\165\x73", "\x76\141\x6c\x75\x65" => "\x62\x75\163"], ["\x6c\x61\142\x65\x6c" => "\xe5\xbc\x80\345\217\x91\345\xba\223\x20\144\x65\x76", "\x76\x61\x6c\x75\x65" => "\144\145\166"]]; } }
