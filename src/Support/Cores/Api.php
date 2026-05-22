<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:21              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{AggregateApi, DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataToggleApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto aW1fh; MKeDr: O_Kpr: goto z9DYD; z9DYD: collect(scandir(app_path("\x2f\101\160\x69\x54\x65\x6d\x70\154\141\164\x65\163")))->filter(fn($jUjZE) => !in_array($jUjZE, ["\56", "\56\x2e"]) && str_ends_with($jUjZE, "\x2e\160\x68\x70"))->each(function ($jUjZE) { $Gr1Wj = "\x41\x70\160\134\101\160\x69\x54\145\155\160\x6c\141\164\145\x73\134" . str_replace("\x2e\160\x68\x70", '', $jUjZE); try { goto OZe70; J1Lce: qb5rd: goto QmOZK; d2ZsY: Admin::context()->add("\141\x70\151\x73", $Gr1Wj); goto J1Lce; OZe70: if (!class_exists($Gr1Wj)) { goto qb5rd; } goto d2ZsY; QmOZK: } catch (\Throwable $gisIz) { } }); goto q8ZSz; LYY9J: if (is_dir(self::path())) { goto O_Kpr; } goto xhRmM; xhRmM: return; goto MKeDr; aW1fh: Admin::context()->set("\x61\x70\151\163", [AggregateApi::class, DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataToggleApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto LYY9J; q8ZSz: } public static function path($jUjZE = '') { return app_path("\57\x41\x70\151\124\x65\155\160\154\x61\x74\145\x73") . ($jUjZE ? "\57" . ltrim($jUjZE, "\x2f") : ''); } }
