<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:17              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{AggregateApi, DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataToggleApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto Hqram; AEto0: if (is_dir(self::path())) { goto Lmqwj; } goto HC4Os; hWpN7: collect(scandir(app_path("\x2f\x41\x70\x69\x54\x65\155\x70\154\141\164\145\x73")))->filter(fn($jUjZE) => !in_array($jUjZE, ["\56", "\56\56"]) && str_ends_with($jUjZE, "\x2e\x70\150\x70"))->each(function ($jUjZE) { $Gr1Wj = "\x41\x70\160\x5c\x41\x70\x69\124\x65\x6d\x70\154\141\x74\145\x73\134" . str_replace("\x2e\x70\x68\x70", '', $jUjZE); try { goto YYQLU; sX1Le: Admin::context()->add("\x61\x70\x69\163", $Gr1Wj); goto jXOmo; YYQLU: if (!class_exists($Gr1Wj)) { goto iGvaB; } goto sX1Le; jXOmo: iGvaB: goto LrC0q; LrC0q: } catch (\Throwable $gisIz) { } }); goto AVwd0; HC4Os: return; goto TfqvM; TfqvM: Lmqwj: goto hWpN7; Hqram: Admin::context()->set("\x61\160\151\x73", [AggregateApi::class, DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataToggleApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto AEto0; AVwd0: } public static function path($jUjZE = '') { return app_path("\57\101\x70\x69\124\x65\155\160\x6c\x61\164\145\163") . ($jUjZE ? "\x2f" . ltrim($jUjZE, "\57") : ''); } }
