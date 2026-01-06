<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\x74\x65\155\x70\x6c\141\x74\x65\137\x74\x69\x74\154\145", "\x6d\x65\x74\150\157\144"); protected $casts = array("\141\162\x67\163" => "\x6a\163\157\156"); const METHODS = array("\147\x65\x74", "\x68\145\x61\144", "\x70\x6f\163\164", "\x70\x75\x74", "\x70\141\x74\x63\x68", "\x64\145\154\x65\x74\x65", "\x6f\x70\x74\151\x6f\x6e\163"); public function templateTitle() : Attribute { return Attribute::get(function () { goto vnXEK; vnXEK: if (class_exists($this->template)) { goto jBqAL; } goto c2uLE; szj0I: jBqAL: goto ZTa2Q; c2uLE: return ''; goto szj0I; owk2o: $B5z1q = app($this->template); goto kNTW3; M45cT: ib_1q: goto owk2o; N7cK1: return ''; goto M45cT; ZTa2Q: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto ib_1q; } goto N7cK1; kNTW3: return $B5z1q->getMethod() . "\x20\55\x20" . $B5z1q->getTitle(); goto UrxN5; UrxN5: }); } public function method() : Attribute { return Attribute::get(function () { goto OOa8B; OOa8B: if (class_exists($this->template)) { goto HqNPN; } goto tHgyz; g9wVd: return in_array($VHQ_5, self::METHODS) ? $VHQ_5 : "\x61\x6e\171"; goto gtmad; k21Wy: LZYR3: goto VTXG3; jXNlD: HqNPN: goto U1947; tHgyz: return ''; goto jXNlD; U1947: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto LZYR3; } goto FN6Nw; FN6Nw: return "\141\156\x79"; goto k21Wy; VTXG3: $VHQ_5 = app($this->template)->getMethod(); goto g9wVd; gtmad: }); } }
