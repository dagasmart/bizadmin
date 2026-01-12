<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:58              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\163\x79\163\x74\x65\155\x5f\155\145\163\163\x61\147\145"; protected $primaryKey = "\x69\x64"; public function typeOptions() : array { return [["\166\141\154\165\x65" => "\160\162\x69\x76\141\x74\145", "\154\141\x62\145\x6c" => "\xe7\247\x81\344\xbf\xa1"], ["\x76\141\154\x75\x65" => "\163\171\163\x74\145\155", "\154\x61\142\x65\154" => "\347\263\xbb\xe7\xbb\x9f", "\144\151\163\x61\x62\x6c\145\144" => admin_user()->mer_id], ["\166\x61\154\x75\x65" => "\x67\x72\x6f\x75\x70", "\x6c\141\x62\x65\x6c" => "\347\xbe\xa4\xe7\xbb\204"], ["\166\x61\x6c\165\145" => "\x64\145\160\x61\x72\164\155\x65\x6e\x74", "\154\141\142\145\154" => "\xe9\x83\250\xe9\x97\xa8"], ["\166\141\x6c\165\145" => "\x72\x65\x67\151\x6f\156", "\154\x61\142\145\x6c" => "\xe5\234\260\xe5\x8c\272"]]; } public function setToNamesAttribute($PBVs1) { goto iOfrD; iOfrD: if (is_array($PBVs1)) { goto vXYxz; } goto gxtwy; M2tvf: goto Xid_J; goto IDhtR; Jde0o: Xid_J: goto E0AHf; eSN1B: $this->attributes["\164\157\137\x6e\141\x6d\145\163"] = implode("\54", $PBVs1); goto Jde0o; IDhtR: vXYxz: goto eSN1B; gxtwy: $this->attributes["\164\157\137\156\141\x6d\x65\x73"] = $PBVs1; goto M2tvf; E0AHf: } public function region() : array { return BasicRegion::query()->whereIn("\x6c\x65\166\145\154", [1, 2])->select("\151\144", "\143\157\144\x65\40\141\163\40\166\x61\x6c\x75\x65", "\156\141\x6d\x65", "\x70\141\162\145\x6e\x74\x5f\151\144")->selectRaw("\x6e\141\155\145\x20\141\163\x20\x6c\141\x62\x65\154")->get()->toArray(); } }
