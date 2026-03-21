<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{AggregateApi, DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataToggleApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto Z7BiT; ovmM9: return; goto FXxw0; a31lG: collect(scandir(app_path("\57\101\x70\x69\124\x65\x6d\160\x6c\141\x74\145\163")))->filter(fn($svNT9) => !in_array($svNT9, ["\x2e", "\x2e\56"]) && str_ends_with($svNT9, "\56\x70\x68\160"))->each(function ($svNT9) { $loAlm = "\101\160\160\x5c\x41\160\x69\124\x65\x6d\x70\x6c\x61\164\x65\x73\x5c" . str_replace("\x2e\160\x68\x70", '', $svNT9); try { goto H4DNl; Cmd81: Y6NAE: goto bOX_d; H4DNl: if (!class_exists($loAlm)) { goto Y6NAE; } goto qHvUY; qHvUY: Admin::context()->add("\x61\160\x69\x73", $loAlm); goto Cmd81; bOX_d: } catch (\Throwable $OiXs7) { } }); goto Y2EfV; WXLVs: if (is_dir(self::path())) { goto yaBTt; } goto ovmM9; FXxw0: yaBTt: goto a31lG; Z7BiT: Admin::context()->set("\141\x70\151\163", [AggregateApi::class, DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataToggleApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto WXLVs; Y2EfV: } public static function path($svNT9 = '') { return app_path("\x2f\x41\160\151\x54\145\x6d\160\x6c\x61\164\145\x73") . ($svNT9 ? "\57" . ltrim($svNT9, "\57") : ''); } }
