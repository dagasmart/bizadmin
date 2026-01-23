<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Models; use DagaSmart\BizAdmin\Support\Apis\AdminBaseApi; use Illuminate\Database\Eloquent\Casts\Attribute; use Illuminate\Database\Eloquent\Concerns\HasTimestamps; class AdminApi extends BaseModel { use HasTimestamps; protected $appends = array("\164\145\x6d\x70\154\x61\164\x65\137\x74\x69\x74\154\145", "\x6d\x65\x74\150\x6f\x64"); protected $casts = array("\141\162\x67\163" => "\152\163\157\156"); const METHODS = array("\x67\145\x74", "\150\x65\x61\x64", "\160\157\x73\164", "\x70\165\x74", "\160\141\x74\x63\x68", "\144\145\x6c\x65\164\x65", "\157\160\164\x69\x6f\156\163"); public function templateTitle() : Attribute { return Attribute::get(function () { goto yqHnw; MvqBD: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto k2mwN; } goto Rnw2L; b4pV8: k2mwN: goto h0JuM; dKZJm: return $zwBgV->getMethod() . "\x20\55\x20" . $zwBgV->getTitle(); goto uBxQy; Rnw2L: return ''; goto b4pV8; hgmsa: return ''; goto Iv4bJ; yqHnw: if (class_exists($this->template)) { goto AZK27; } goto hgmsa; Iv4bJ: AZK27: goto MvqBD; h0JuM: $zwBgV = app($this->template); goto dKZJm; uBxQy: }); } public function method() : Attribute { return Attribute::get(function () { goto n_vgI; avA9P: YV9X3: goto gfE5I; uzKsw: return "\x61\x6e\171"; goto j4pRY; YwC_y: return in_array($CYZaE, self::METHODS) ? $CYZaE : "\x61\156\x79"; goto J8GDI; gfE5I: if ((new \ReflectionClass($this->template))->isSubclassOf(AdminBaseApi::class)) { goto cEwHY; } goto uzKsw; j4pRY: cEwHY: goto DJ_c1; DJ_c1: $CYZaE = app($this->template)->getMethod(); goto YwC_y; n_vgI: if (class_exists($this->template)) { goto YV9X3; } goto sP6XN; sP6XN: return ''; goto avA9P; J8GDI: }); } }
