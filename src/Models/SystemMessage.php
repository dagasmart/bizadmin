<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\x73\x79\163\x74\x65\155\x5f\x6d\x65\163\163\141\147\145"; protected $primaryKey = "\151\x64"; public function typeOptions() : array { return [["\166\x61\x6c\165\x65" => "\x70\162\151\166\141\x74\145", "\154\x61\x62\145\x6c" => "\347\xa7\201\xe4\xbf\xa1"], ["\x76\141\x6c\x75\145" => "\163\x79\x73\164\145\155", "\154\141\142\x65\x6c" => "\347\xb3\xbb\xe7\xbb\237", "\x64\151\x73\141\x62\x6c\145\x64" => admin_user()->mer_id], ["\x76\x61\154\165\x65" => "\147\x72\x6f\x75\160", "\154\x61\142\x65\154" => "\347\276\xa4\xe7\xbb\x84"], ["\x76\x61\154\165\145" => "\x64\145\160\x61\162\164\155\x65\x6e\x74", "\x6c\141\142\x65\154" => "\351\203\250\xe9\227\xa8"], ["\166\x61\154\x75\145" => "\x72\x65\147\151\157\x6e", "\x6c\x61\x62\x65\154" => "\xe5\x9c\260\xe5\x8c\272"]]; } public function setToNamesAttribute($AHvXX) { goto BTXVv; XebPr: $this->attributes["\164\x6f\137\156\141\x6d\x65\163"] = $AHvXX; goto k_2Sm; EvPcn: $this->attributes["\164\157\137\156\x61\x6d\145\x73"] = implode("\x2c", $AHvXX); goto NXECR; Bs8I1: K05A0: goto EvPcn; BTXVv: if (is_array($AHvXX)) { goto K05A0; } goto XebPr; k_2Sm: goto d2pvL; goto Bs8I1; NXECR: d2pvL: goto MXHXN; MXHXN: } public function region() : array { return BasicRegion::query()->whereIn("\x6c\145\166\x65\154", [1, 2])->select("\x69\144", "\x63\x6f\144\145\40\141\163\40\x76\141\x6c\165\145", "\156\141\x6d\145", "\160\x61\162\145\156\x74\x5f\151\x64")->selectRaw("\156\141\155\x65\x20\x61\x73\x20\x6c\141\142\145\154")->get()->toArray(); } }
