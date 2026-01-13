<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:49              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto uhFrF; GP6kV: ZOh6H: goto zYS1r; uhFrF: Admin::context()->set("\x61\160\151\x73", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto TREPa; zYS1r: collect(scandir(app_path("\x2f\101\x70\151\124\x65\155\x70\154\x61\x74\x65\163")))->filter(fn($LUgxB) => !in_array($LUgxB, ["\x2e", "\56\56"]) && str_ends_with($LUgxB, "\56\x70\x68\160"))->each(function ($LUgxB) { $aKnQD = "\x41\x70\160\134\101\x70\151\124\x65\x6d\160\154\x61\x74\145\163\x5c" . str_replace("\x2e\160\x68\160", '', $LUgxB); try { goto Bt50V; Bt50V: if (!class_exists($aKnQD)) { goto QEHMd; } goto UM8JO; UxDPx: QEHMd: goto zoc1B; UM8JO: Admin::context()->add("\141\160\x69\x73", $aKnQD); goto UxDPx; zoc1B: } catch (\Throwable $nEc3H) { } }); goto H_dD1; TREPa: if (is_dir(self::path())) { goto ZOh6H; } goto ym3Or; ym3Or: return; goto GP6kV; H_dD1: } public static function path($LUgxB = '') { return app_path("\x2f\x41\160\x69\124\x65\155\160\x6c\x61\x74\x65\x73") . ($LUgxB ? "\x2f" . ltrim($LUgxB, "\x2f") : ''); } }
