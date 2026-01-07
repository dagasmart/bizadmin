<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto dMDo2; sYeXS: return; goto Ug97I; oXaxD: if (is_dir(self::path())) { goto ZyC5K; } goto sYeXS; Ug97I: ZyC5K: goto NvAEL; NvAEL: collect(scandir(app_path("\x2f\101\160\151\124\x65\x6d\x70\x6c\x61\x74\x65\x73")))->filter(fn($Vf601) => !in_array($Vf601, ["\x2e", "\x2e\x2e"]) && str_ends_with($Vf601, "\x2e\160\x68\160"))->each(function ($Vf601) { $mqJRY = "\101\160\x70\x5c\x41\x70\151\124\145\155\160\154\141\164\x65\163\134" . str_replace("\x2e\x70\x68\160", '', $Vf601); try { goto zaL6r; AUlGh: Admin::context()->add("\141\x70\151\163", $mqJRY); goto RHWej; RHWej: IY8Oo: goto ZPVQm; zaL6r: if (!class_exists($mqJRY)) { goto IY8Oo; } goto AUlGh; ZPVQm: } catch (\Throwable $QsWct) { } }); goto YIW40; dMDo2: Admin::context()->set("\141\160\151\163", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto oXaxD; YIW40: } public static function path($Vf601 = '') { return app_path("\x2f\101\x70\151\x54\x65\155\160\x6c\x61\x74\x65\x73") . ($Vf601 ? "\57" . ltrim($Vf601, "\x2f") : ''); } }
