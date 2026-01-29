<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:34              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\163\171\x73\x74\145\x6d\137\155\x65\x73\x73\141\147\x65"; protected $primaryKey = "\151\144"; public function typeOptions() : array { return [["\x76\141\154\x75\145" => "\x70\162\x69\x76\141\x74\x65", "\x6c\x61\142\145\x6c" => "\xe7\xa7\x81\344\xbf\241"], ["\166\141\x6c\x75\x65" => "\163\171\163\x74\x65\x6d", "\154\141\x62\x65\154" => "\xe7\xb3\273\xe7\xbb\x9f", "\x64\151\163\141\142\154\145\144" => admin_user()->mer_id], ["\x76\141\154\x75\145" => "\x67\162\157\165\160", "\154\141\142\145\x6c" => "\xe7\xbe\xa4\347\273\x84"], ["\166\x61\154\165\x65" => "\x64\x65\x70\x61\x72\164\155\145\156\x74", "\154\x61\142\145\154" => "\xe9\x83\xa8\351\227\xa8"], ["\166\x61\x6c\x75\x65" => "\x72\x65\x67\x69\157\156", "\x6c\141\142\x65\x6c" => "\345\234\260\345\x8c\xba"]]; } public function setToNamesAttribute($PfrF0) { goto j7CNz; bo0dv: $this->attributes["\x74\x6f\x5f\x6e\x61\155\145\x73"] = implode("\54", $PfrF0); goto xfDYw; KkfRX: goto yC753; goto MnGuD; kB3IO: $this->attributes["\164\157\137\156\141\155\x65\x73"] = $PfrF0; goto KkfRX; xfDYw: yC753: goto fk0Iz; j7CNz: if (is_array($PfrF0)) { goto qN3lF; } goto kB3IO; MnGuD: qN3lF: goto bo0dv; fk0Iz: } public function region() : array { return BasicRegion::query()->whereIn("\x6c\x65\x76\145\154", [1, 2])->select("\x69\x64", "\143\x6f\144\x65\40\141\x73\x20\x76\x61\x6c\x75\x65", "\x6e\x61\155\145", "\x70\141\162\145\156\164\137\x69\x64")->selectRaw("\x6e\141\x6d\145\x20\141\163\x20\154\141\142\x65\x6c")->get()->toArray(); } }
