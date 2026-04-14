<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{AggregateApi, DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataToggleApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto HWRZH; uGkz2: if (is_dir(self::path())) { goto xD7RY; } goto PtKty; jc9ev: collect(scandir(app_path("\57\x41\x70\x69\124\x65\155\160\x6c\141\164\x65\x73")))->filter(fn($jUjZE) => !in_array($jUjZE, ["\x2e", "\56\56"]) && str_ends_with($jUjZE, "\x2e\x70\150\160"))->each(function ($jUjZE) { $Gr1Wj = "\101\x70\160\x5c\101\x70\x69\124\x65\x6d\160\154\x61\164\145\x73\x5c" . str_replace("\56\160\150\160", '', $jUjZE); try { goto C_ren; me2w8: sAAjG: goto fsdsv; C_ren: if (!class_exists($Gr1Wj)) { goto sAAjG; } goto RToWO; RToWO: Admin::context()->add("\x61\160\151\x73", $Gr1Wj); goto me2w8; fsdsv: } catch (\Throwable $gisIz) { } }); goto BTylN; HWRZH: Admin::context()->set("\x61\x70\151\163", [AggregateApi::class, DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataToggleApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto uGkz2; rqPbw: xD7RY: goto jc9ev; PtKty: return; goto rqPbw; BTylN: } public static function path($jUjZE = '') { return app_path("\57\x41\160\x69\124\145\155\x70\x6c\x61\164\145\x73") . ($jUjZE ? "\57" . ltrim($jUjZE, "\57") : ''); } }
