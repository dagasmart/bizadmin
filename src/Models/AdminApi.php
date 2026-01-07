<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\x74\145\x6d\160\x6c\x61\x74\x65\x5f\164\151\164\x6c\145", "\155\x65\164\150\x6f\144"); protected $casts = array("\x61\x72\147\x73" => "\x6a\x73\x6f\156"); const METHODS = array("\147\x65\x74", "\x68\145\x61\144", "\x70\157\163\x74", "\x70\165\164", "\160\141\x74\143\150", "\144\x65\154\145\x74\x65", "\x6f\160\164\151\157\x6e\x73"); public function templateTitle() : Attribute { return Attribute::get(function () { goto ZwUwV; CVRa6: WKagC: goto e4Mcy; dpV2z: $Wt8ua = app($this->template); goto xA4aY; ftKxP: return ''; goto dIP8F; dIP8F: FcARc: goto dpV2z; U6rtU: return ''; goto CVRa6; xA4aY: return $Wt8ua->getMethod() . "\40\x2d\40" . $Wt8ua->getTitle(); goto uAT4X; ZwUwV: if (class_exists($this->template)) { goto WKagC; } goto U6rtU; e4Mcy: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto FcARc; } goto ftKxP; uAT4X: }); } public function method() : Attribute { return Attribute::get(function () { goto ErODt; hoMaI: return ''; goto wXW35; PvCie: $K1KwX = app($this->template)->getMethod(); goto BZKkU; mheez: nlelt: goto PvCie; BZKkU: return in_array($K1KwX, self::METHODS) ? $K1KwX : "\x61\156\171"; goto GcZkC; bV1R9: return "\x61\x6e\x79"; goto mheez; ErODt: if (class_exists($this->template)) { goto ZzI1g; } goto hoMaI; Tgqvu: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto nlelt; } goto bV1R9; wXW35: ZzI1g: goto Tgqvu; GcZkC: }); } }
