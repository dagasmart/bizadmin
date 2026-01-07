<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:20              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\163\171\x73\164\145\x6d\x5f\x6d\145\x73\x73\141\x67\145"; protected $primaryKey = "\151\x64"; public function typeOptions() : array { return [["\x76\141\154\165\x65" => "\x70\162\x69\166\141\164\x65", "\154\x61\x62\145\x6c" => "\347\247\x81\344\xbf\241"], ["\166\x61\154\x75\145" => "\163\x79\x73\x74\x65\155", "\x6c\x61\142\x65\x6c" => "\xe7\263\xbb\xe7\273\x9f", "\144\151\x73\141\x62\x6c\145\144" => admin_user()->mer_id], ["\166\x61\154\165\145" => "\147\x72\157\165\x70", "\154\141\142\x65\x6c" => "\347\276\244\xe7\xbb\204"], ["\x76\x61\x6c\x75\145" => "\x64\x65\x70\141\162\x74\155\145\156\x74", "\x6c\x61\142\145\x6c" => "\351\x83\xa8\351\227\250"], ["\166\x61\x6c\x75\145" => "\x72\145\x67\151\x6f\x6e", "\x6c\141\142\x65\154" => "\xe5\234\xb0\345\x8c\272"]]; } public function setToNamesAttribute($w0aoq) { goto W9n4o; TcLbz: goto tMr0m; goto r9bJd; bi2aa: $this->attributes["\x74\x6f\x5f\x6e\x61\x6d\x65\163"] = implode("\x2c", $w0aoq); goto IVBHa; TID7s: $this->attributes["\164\x6f\137\x6e\141\x6d\x65\163"] = $w0aoq; goto TcLbz; IVBHa: tMr0m: goto vv8_5; W9n4o: if (is_array($w0aoq)) { goto vz144; } goto TID7s; r9bJd: vz144: goto bi2aa; vv8_5: } public function region() : array { return BasicRegion::query()->whereIn("\154\x65\x76\145\154", [1, 2])->select("\x69\144", "\x63\x6f\x64\x65\40\x61\163\40\x76\141\154\165\x65", "\156\x61\x6d\x65", "\x70\141\x72\145\x6e\x74\x5f\151\144")->selectRaw("\156\141\x6d\145\x20\x61\x73\40\154\141\x62\x65\x6c")->get()->toArray(); } }
