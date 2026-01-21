<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\x73\171\163\x74\x65\x6d\137\x6d\x65\x73\163\141\147\x65"; protected $primaryKey = "\151\x64"; public function typeOptions() : array { return [["\166\141\x6c\165\x65" => "\160\162\151\166\141\164\x65", "\x6c\141\x62\145\154" => "\xe7\247\x81\344\277\xa1"], ["\166\x61\154\x75\x65" => "\x73\171\163\x74\x65\155", "\154\x61\x62\145\154" => "\347\xb3\273\347\273\237", "\x64\151\163\141\x62\154\145\144" => admin_user()->mer_id], ["\x76\141\x6c\x75\x65" => "\147\x72\157\x75\x70", "\x6c\x61\142\x65\154" => "\xe7\xbe\244\347\273\x84"], ["\166\x61\154\165\145" => "\144\x65\160\x61\x72\x74\155\145\x6e\164", "\154\141\142\145\154" => "\xe9\203\250\xe9\227\250"], ["\x76\x61\154\165\145" => "\x72\x65\147\151\157\x6e", "\154\x61\142\145\x6c" => "\345\x9c\260\xe5\214\272"]]; } public function setToNamesAttribute($U5YWC) { goto CtBOl; CtBOl: if (is_array($U5YWC)) { goto rD3bm; } goto x3EuY; x3EuY: $this->attributes["\x74\157\137\x6e\141\x6d\x65\163"] = $U5YWC; goto fF693; fF693: goto ZkOMY; goto t3Ym4; OTkn_: $this->attributes["\x74\157\x5f\x6e\x61\155\x65\163"] = implode("\x2c", $U5YWC); goto vncoz; vncoz: ZkOMY: goto akrS9; t3Ym4: rD3bm: goto OTkn_; akrS9: } public function region() : array { return BasicRegion::query()->whereIn("\x6c\x65\x76\x65\x6c", [1, 2])->select("\151\x64", "\x63\157\x64\x65\x20\x61\x73\x20\x76\141\154\x75\x65", "\x6e\x61\x6d\x65", "\160\x61\x72\x65\156\164\137\151\x64")->selectRaw("\x6e\141\x6d\x65\x20\x61\x73\40\x6c\x61\x62\145\x6c")->get()->toArray(); } }
