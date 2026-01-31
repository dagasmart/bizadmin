<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto oydyR; J03um: collect(scandir(app_path("\57\x41\x70\151\124\x65\155\x70\154\x61\164\x65\163")))->filter(fn($BiPcc) => !in_array($BiPcc, ["\56", "\56\x2e"]) && str_ends_with($BiPcc, "\x2e\160\x68\x70"))->each(function ($BiPcc) { $fEbDO = "\x41\x70\x70\134\x41\160\151\124\x65\x6d\x70\x6c\x61\x74\x65\x73\x5c" . str_replace("\56\x70\x68\160", '', $BiPcc); try { goto RQW1B; J2It3: Admin::context()->add("\x61\x70\x69\163", $fEbDO); goto Zv84J; Zv84J: RZTBO: goto ghPwz; RQW1B: if (!class_exists($fEbDO)) { goto RZTBO; } goto J2It3; ghPwz: } catch (\Throwable $AwPkn) { } }); goto ErcBe; a232W: return; goto c6gqA; CPQib: if (is_dir(self::path())) { goto BCP8l; } goto a232W; oydyR: Admin::context()->set("\141\160\151\x73", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto CPQib; c6gqA: BCP8l: goto J03um; ErcBe: } public static function path($BiPcc = '') { return app_path("\57\101\x70\x69\124\145\x6d\160\154\141\x74\x65\x73") . ($BiPcc ? "\x2f" . ltrim($BiPcc, "\57") : ''); } }
