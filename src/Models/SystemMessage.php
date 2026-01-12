<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\163\x79\163\x74\x65\155\137\x6d\145\163\163\x61\x67\145"; protected $primaryKey = "\x69\x64"; public function typeOptions() : array { return [["\166\141\x6c\x75\x65" => "\160\162\x69\x76\141\164\x65", "\154\141\142\x65\154" => "\xe7\247\x81\344\xbf\xa1"], ["\166\141\154\x75\145" => "\163\x79\x73\164\x65\155", "\x6c\x61\x62\145\x6c" => "\347\xb3\273\xe7\273\x9f", "\144\x69\x73\x61\142\154\145\144" => admin_user()->mer_id], ["\x76\x61\x6c\x75\145" => "\147\x72\157\165\x70", "\154\141\142\x65\154" => "\xe7\xbe\244\347\xbb\204"], ["\166\x61\x6c\x75\x65" => "\x64\145\x70\x61\162\x74\155\145\x6e\164", "\154\x61\142\x65\154" => "\xe9\203\250\xe9\227\xa8"], ["\x76\141\x6c\165\145" => "\x72\145\x67\x69\157\156", "\154\141\x62\x65\154" => "\xe5\234\xb0\xe5\214\xba"]]; } public function setToNamesAttribute($eXCcR) { goto YO9hE; V6dA_: $this->attributes["\x74\x6f\x5f\x6e\x61\155\145\163"] = implode("\54", $eXCcR); goto UJ42N; Z_3uk: goto h_Wey; goto OCtRt; MfACZ: $this->attributes["\x74\x6f\137\x6e\x61\155\x65\x73"] = $eXCcR; goto Z_3uk; OCtRt: m5wFz: goto V6dA_; UJ42N: h_Wey: goto tb5wW; YO9hE: if (is_array($eXCcR)) { goto m5wFz; } goto MfACZ; tb5wW: } public function region() : array { return BasicRegion::query()->whereIn("\x6c\x65\x76\145\154", [1, 2])->select("\151\144", "\143\x6f\x64\x65\40\x61\x73\40\x76\x61\x6c\x75\x65", "\156\141\155\145", "\x70\141\x72\145\156\x74\x5f\151\144")->selectRaw("\156\141\x6d\x65\40\x61\163\x20\x6c\141\142\x65\154")->get()->toArray(); } }
