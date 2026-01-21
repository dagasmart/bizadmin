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
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\x73\171\x73\164\x65\155\x5f\x6d\145\163\x73\x61\147\145"; protected $primaryKey = "\151\144"; public function typeOptions() : array { return [["\x76\141\154\165\145" => "\x70\162\x69\166\x61\x74\145", "\x6c\141\142\145\154" => "\347\xa7\201\344\277\241"], ["\166\x61\x6c\165\145" => "\x73\171\163\164\x65\155", "\154\141\142\145\x6c" => "\xe7\xb3\273\347\xbb\x9f", "\x64\x69\163\x61\142\x6c\x65\x64" => admin_user()->mer_id], ["\x76\x61\154\x75\x65" => "\x67\162\x6f\x75\160", "\154\x61\x62\145\x6c" => "\xe7\276\xa4\xe7\273\204"], ["\166\x61\x6c\165\x65" => "\x64\145\160\141\x72\164\155\x65\x6e\x74", "\154\x61\x62\x65\154" => "\xe9\x83\250\351\227\250"], ["\166\141\x6c\x75\x65" => "\x72\x65\x67\x69\x6f\156", "\x6c\141\x62\x65\x6c" => "\345\x9c\260\xe5\x8c\272"]]; } public function setToNamesAttribute($OmZ0e) { goto BMdbA; B6Q0_: LvCFY: goto br_FF; qME0K: $this->attributes["\164\157\x5f\x6e\141\155\145\x73"] = $OmZ0e; goto pR4ig; pR4ig: goto LvCFY; goto Z19xW; BMdbA: if (is_array($OmZ0e)) { goto brMqm; } goto qME0K; Z19xW: brMqm: goto i5xqW; i5xqW: $this->attributes["\x74\x6f\x5f\x6e\x61\x6d\x65\163"] = implode("\54", $OmZ0e); goto B6Q0_; br_FF: } public function region() : array { return BasicRegion::query()->whereIn("\x6c\145\x76\145\x6c", [1, 2])->select("\151\x64", "\x63\157\x64\x65\40\x61\x73\x20\x76\141\154\165\145", "\156\141\155\145", "\160\x61\162\145\156\164\x5f\x69\x64")->selectRaw("\156\x61\155\x65\x20\x61\x73\x20\x6c\141\x62\x65\x6c")->get()->toArray(); } }
