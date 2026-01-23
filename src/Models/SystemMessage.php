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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\x73\x79\163\164\x65\x6d\137\x6d\145\x73\163\x61\147\x65"; protected $primaryKey = "\151\144"; public function typeOptions() : array { return [["\166\141\154\x75\145" => "\x70\x72\151\166\x61\x74\x65", "\x6c\141\142\145\154" => "\347\xa7\x81\xe4\277\xa1"], ["\166\141\x6c\x75\x65" => "\x73\171\163\x74\x65\x6d", "\154\141\x62\145\x6c" => "\xe7\263\273\347\xbb\x9f", "\144\x69\163\141\142\x6c\145\144" => admin_user()->mer_id], ["\166\x61\x6c\x75\x65" => "\147\x72\x6f\x75\160", "\154\141\x62\x65\x6c" => "\xe7\xbe\xa4\347\xbb\x84"], ["\x76\x61\154\165\x65" => "\144\x65\x70\x61\x72\164\x6d\x65\x6e\164", "\154\141\x62\x65\154" => "\351\203\xa8\351\x97\xa8"], ["\166\x61\154\x75\x65" => "\162\x65\x67\x69\x6f\x6e", "\x6c\x61\142\145\x6c" => "\345\x9c\xb0\345\x8c\272"]]; } public function setToNamesAttribute($wZVig) { goto NkUE9; WSV5v: goto iuR0J; goto wCwwk; wCwwk: YB_AO: goto m8CKh; ZpbaG: iuR0J: goto VhlCE; Tvctq: $this->attributes["\x74\157\x5f\x6e\141\x6d\x65\x73"] = $wZVig; goto WSV5v; NkUE9: if (is_array($wZVig)) { goto YB_AO; } goto Tvctq; m8CKh: $this->attributes["\164\x6f\137\156\141\155\145\163"] = implode("\x2c", $wZVig); goto ZpbaG; VhlCE: } public function region() : array { return BasicRegion::query()->whereIn("\154\x65\x76\145\x6c", [1, 2])->select("\151\x64", "\143\x6f\144\145\x20\x61\163\40\x76\x61\154\x75\x65", "\156\141\155\x65", "\160\141\x72\145\x6e\x74\137\x69\144")->selectRaw("\x6e\x61\x6d\x65\x20\x61\x73\x20\x6c\141\x62\x65\154")->get()->toArray(); } }
