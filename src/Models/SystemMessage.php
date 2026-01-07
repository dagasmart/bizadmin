<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:04              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\x73\171\x73\164\145\155\137\155\145\x73\x73\x61\147\145"; protected $primaryKey = "\151\x64"; public function typeOptions() : array { return [["\x76\141\x6c\165\145" => "\160\x72\151\x76\x61\164\x65", "\154\141\142\145\x6c" => "\347\xa7\201\xe4\277\xa1"], ["\x76\141\154\x75\145" => "\x73\171\163\x74\x65\155", "\154\141\142\x65\154" => "\xe7\263\273\xe7\273\237", "\144\x69\x73\x61\x62\x6c\145\144" => admin_user()->mer_id], ["\166\x61\x6c\x75\x65" => "\x67\x72\x6f\x75\x70", "\x6c\141\x62\x65\154" => "\xe7\xbe\244\xe7\273\x84"], ["\x76\141\x6c\x75\x65" => "\x64\145\x70\x61\x72\164\x6d\145\156\x74", "\x6c\x61\x62\x65\x6c" => "\xe9\203\xa8\351\227\250"], ["\x76\x61\x6c\x75\x65" => "\x72\x65\x67\151\x6f\x6e", "\x6c\x61\x62\x65\x6c" => "\xe5\x9c\xb0\xe5\x8c\272"]]; } public function setToNamesAttribute($wMm3m) { goto sdmYx; A3x6W: goto U8PM3; goto YmFZJ; YmFZJ: zcHHq: goto TDFEd; qFpt2: $this->attributes["\164\x6f\137\x6e\141\x6d\x65\163"] = $wMm3m; goto A3x6W; sdmYx: if (is_array($wMm3m)) { goto zcHHq; } goto qFpt2; uDnqr: U8PM3: goto jmtmT; TDFEd: $this->attributes["\164\x6f\137\156\x61\x6d\145\163"] = implode("\x2c", $wMm3m); goto uDnqr; jmtmT: } public function region() : array { return BasicRegion::query()->whereIn("\x6c\145\166\x65\x6c", [1, 2])->select("\x69\144", "\x63\x6f\144\145\x20\141\163\x20\166\141\154\165\x65", "\x6e\x61\x6d\145", "\160\x61\162\x65\x6e\x74\137\151\x64")->selectRaw("\x6e\141\x6d\145\40\141\x73\x20\x6c\141\142\x65\154")->get()->toArray(); } }
