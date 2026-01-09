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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\x73\x79\163\164\145\x6d\137\x6d\x65\163\163\141\x67\145"; protected $primaryKey = "\151\x64"; public function typeOptions() : array { return [["\x76\x61\154\165\x65" => "\160\162\151\166\141\164\145", "\154\141\x62\145\154" => "\xe7\247\201\344\xbf\xa1"], ["\166\x61\154\x75\145" => "\163\171\163\x74\x65\155", "\x6c\x61\142\145\x6c" => "\xe7\xb3\xbb\xe7\273\x9f", "\x64\x69\163\x61\x62\154\x65\144" => admin_user()->mer_id], ["\x76\141\x6c\165\145" => "\147\x72\157\165\x70", "\x6c\141\142\x65\x6c" => "\xe7\xbe\xa4\xe7\xbb\x84"], ["\x76\x61\x6c\165\145" => "\144\145\x70\141\162\164\155\x65\156\x74", "\x6c\141\142\x65\x6c" => "\xe9\203\xa8\351\x97\xa8"], ["\x76\141\x6c\x75\145" => "\x72\145\x67\151\157\x6e", "\154\141\x62\x65\154" => "\xe5\234\xb0\xe5\x8c\272"]]; } public function setToNamesAttribute($HXweU) { goto xW01t; vc0Ws: M2N23: goto sg7mU; VzU8z: oWTY2: goto T8_19; U_O_S: $this->attributes["\x74\x6f\137\156\x61\x6d\x65\163"] = $HXweU; goto i579r; xW01t: if (is_array($HXweU)) { goto oWTY2; } goto U_O_S; T8_19: $this->attributes["\x74\157\x5f\156\141\155\145\x73"] = implode("\54", $HXweU); goto vc0Ws; i579r: goto M2N23; goto VzU8z; sg7mU: } public function region() : array { return BasicRegion::query()->whereIn("\154\145\x76\x65\x6c", [1, 2])->select("\x69\x64", "\x63\157\144\145\x20\x61\x73\40\x76\141\154\x75\145", "\x6e\141\155\145", "\160\141\162\145\x6e\x74\x5f\151\144")->selectRaw("\x6e\x61\x6d\145\x20\141\163\40\154\x61\142\145\154")->get()->toArray(); } }
