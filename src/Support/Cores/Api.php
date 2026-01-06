<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto CYLsJ; gbD41: collect(scandir(app_path("\x2f\x41\x70\x69\124\x65\x6d\x70\154\141\164\145\163")))->filter(fn($UPakE) => !in_array($UPakE, ["\56", "\56\x2e"]) && str_ends_with($UPakE, "\x2e\160\150\x70"))->each(function ($UPakE) { $joij6 = "\x41\160\x70\134\x41\160\151\124\145\x6d\160\154\141\164\145\163\x5c" . str_replace("\56\160\150\160", '', $UPakE); try { goto ojBxI; ojBxI: if (!class_exists($joij6)) { goto NIZsl; } goto JWm4I; JWm4I: Admin::context()->add("\141\160\x69\163", $joij6); goto vRPFB; vRPFB: NIZsl: goto ozjnJ; ozjnJ: } catch (\Throwable $N4FzU) { } }); goto bl2o6; M39iJ: if (is_dir(self::path())) { goto tiv6m; } goto mU8Zz; mU8Zz: return; goto iVYog; CYLsJ: Admin::context()->set("\141\x70\x69\163", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto M39iJ; iVYog: tiv6m: goto gbD41; bl2o6: } public static function path($UPakE = '') { return app_path("\57\101\160\151\x54\x65\155\160\154\x61\164\145\163") . ($UPakE ? "\x2f" . ltrim($UPakE, "\x2f") : ''); } }
