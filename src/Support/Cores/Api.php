<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto q7670; zH0H3: collect(scandir(app_path("\57\101\x70\151\x54\145\x6d\x70\x6c\141\164\145\163")))->filter(fn($GcYXy) => !in_array($GcYXy, ["\x2e", "\56\56"]) && str_ends_with($GcYXy, "\56\160\150\x70"))->each(function ($GcYXy) { $vSP0Y = "\x41\x70\x70\x5c\x41\x70\151\x54\x65\x6d\160\154\141\x74\145\163\134" . str_replace("\x2e\160\150\160", '', $GcYXy); try { goto U6oeZ; lPuQ7: ZVZ6f: goto MOpcm; QJdz8: Admin::context()->add("\x61\x70\151\163", $vSP0Y); goto lPuQ7; U6oeZ: if (!class_exists($vSP0Y)) { goto ZVZ6f; } goto QJdz8; MOpcm: } catch (\Throwable $ORAT3) { } }); goto Q3hSh; q7670: Admin::context()->set("\x61\x70\151\x73", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto YoAFV; YoAFV: if (is_dir(self::path())) { goto TzdfY; } goto OOChT; OOChT: return; goto Lgk1a; Lgk1a: TzdfY: goto zH0H3; Q3hSh: } public static function path($GcYXy = '') { return app_path("\57\x41\x70\x69\124\x65\155\160\x6c\141\x74\145\163") . ($GcYXy ? "\57" . ltrim($GcYXy, "\x2f") : ''); } }
