<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:22              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use Illuminate\Database\Eloquent\SoftDeletes; use DagaSmart\BizAdmin\Models\BaseModel as Model; class SystemMessage extends Model { protected $table = "\x73\171\x73\164\x65\x6d\137\155\145\163\x73\x61\147\x65"; protected $primaryKey = "\x69\x64"; public function typeOptions() : array { return [["\166\141\154\x75\x65" => "\x70\x72\151\166\x61\164\145", "\x6c\x61\x62\x65\x6c" => "\347\247\x81\xe4\xbf\241"], ["\166\141\154\x75\x65" => "\163\171\x73\164\x65\155", "\x6c\x61\x62\x65\154" => "\xe7\xb3\273\xe7\xbb\x9f", "\x64\x69\x73\x61\x62\x6c\x65\x64" => admin_user()->mer_id], ["\166\141\x6c\165\145" => "\147\162\x6f\x75\160", "\x6c\x61\x62\x65\154" => "\347\xbe\xa4\xe7\273\x84"], ["\x76\x61\x6c\x75\145" => "\x64\145\160\141\162\x74\x6d\145\x6e\x74", "\154\141\x62\x65\x6c" => "\xe9\203\250\xe9\227\250"], ["\166\141\154\165\145" => "\162\x65\147\151\x6f\x6e", "\154\141\142\145\x6c" => "\345\x9c\xb0\345\x8c\xba"]]; } public function setToNamesAttribute($msRQo) { goto oW3TS; skIMT: kmuaa: goto Ksxzv; Ksxzv: $this->attributes["\164\x6f\137\x6e\x61\x6d\x65\163"] = implode("\54", $msRQo); goto dmV55; BGqCp: $this->attributes["\x74\157\x5f\x6e\141\x6d\x65\x73"] = $msRQo; goto hY0vE; dmV55: nG5bn: goto C7yBY; oW3TS: if (is_array($msRQo)) { goto kmuaa; } goto BGqCp; hY0vE: goto nG5bn; goto skIMT; C7yBY: } public function region() : array { return BasicRegion::query()->whereIn("\154\145\x76\145\154", [1, 2])->select("\151\144", "\x63\x6f\144\x65\x20\141\x73\40\x76\141\154\x75\x65", "\156\x61\155\145", "\160\141\162\145\156\164\137\151\x64")->selectRaw("\x6e\141\155\x65\x20\x61\x73\x20\x6c\141\142\145\154")->get()->toArray(); } }
