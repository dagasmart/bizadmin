<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\x73\171\x73\164\145\155\137\155\145\163\163\141\x67\145"; protected $primaryKey = "\x69\144"; public function typeOptions() : array { return [["\166\141\154\165\145" => "\x70\x72\151\166\141\x74\145", "\154\x61\x62\145\x6c" => "\xe7\xa7\x81\344\277\241"], ["\x76\x61\154\165\x65" => "\x73\x79\163\164\x65\x6d", "\x6c\x61\x62\145\x6c" => "\347\xb3\xbb\347\xbb\x9f", "\144\151\163\141\142\x6c\145\x64" => admin_user()->mer_id], ["\x76\141\x6c\x75\145" => "\x67\162\157\x75\160", "\154\141\142\145\x6c" => "\347\276\xa4\347\273\x84"], ["\166\x61\154\x75\145" => "\x64\x65\x70\141\162\x74\x6d\x65\156\164", "\154\141\142\x65\x6c" => "\351\203\250\xe9\x97\xa8"], ["\x76\x61\154\165\x65" => "\x72\x65\x67\x69\157\x6e", "\154\x61\142\145\x6c" => "\xe5\234\xb0\345\214\xba"]]; } public function setToNamesAttribute($JqsAq) { goto jWP28; zIsJM: $this->attributes["\164\157\137\x6e\141\x6d\145\x73"] = $JqsAq; goto qNOPr; mqj0T: lowkz: goto vHT6d; JQbIy: fCEO2: goto ejLjy; jWP28: if (is_array($JqsAq)) { goto lowkz; } goto zIsJM; vHT6d: $this->attributes["\164\x6f\x5f\x6e\141\x6d\145\x73"] = implode("\54", $JqsAq); goto JQbIy; qNOPr: goto fCEO2; goto mqj0T; ejLjy: } public function region() : array { return BasicRegion::query()->whereIn("\154\x65\166\x65\154", [1, 2])->select("\x69\x64", "\143\157\x64\x65\x20\141\163\40\166\x61\x6c\x75\145", "\156\141\x6d\145", "\x70\141\162\x65\156\164\x5f\x69\144")->selectRaw("\156\141\155\x65\40\141\x73\x20\x6c\x61\142\145\x6c")->get()->toArray(); } }
