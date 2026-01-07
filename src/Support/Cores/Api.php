<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto Y7qkr; Y7qkr: Admin::context()->set("\141\160\x69\x73", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto VG3xj; VG3xj: if (is_dir(self::path())) { goto f31dG; } goto Q3X2e; kwA7b: collect(scandir(app_path("\57\101\x70\151\124\145\x6d\x70\154\141\164\145\x73")))->filter(fn($u6HwB) => !in_array($u6HwB, ["\x2e", "\x2e\56"]) && str_ends_with($u6HwB, "\x2e\x70\150\160"))->each(function ($u6HwB) { $eaeT2 = "\x41\x70\160\x5c\x41\160\151\x54\x65\155\x70\x6c\141\x74\145\163\134" . str_replace("\56\x70\150\160", '', $u6HwB); try { goto Tk478; eBvii: Admin::context()->add("\x61\x70\151\x73", $eaeT2); goto YNAoO; YNAoO: CUnzX: goto I8Jsz; Tk478: if (!class_exists($eaeT2)) { goto CUnzX; } goto eBvii; I8Jsz: } catch (\Throwable $Z3JTx) { } }); goto ZH3bA; ltOGv: f31dG: goto kwA7b; Q3X2e: return; goto ltOGv; ZH3bA: } public static function path($u6HwB = '') { return app_path("\57\x41\160\x69\x54\x65\155\x70\x6c\141\164\145\x73") . ($u6HwB ? "\57" . ltrim($u6HwB, "\x2f") : ''); } }
