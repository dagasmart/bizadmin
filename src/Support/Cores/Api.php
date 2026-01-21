<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto IvzPL; JiCer: if (is_dir(self::path())) { goto W9xm1; } goto nL2GQ; IvzPL: Admin::context()->set("\x61\160\151\x73", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto JiCer; nL2GQ: return; goto zzsyJ; zzsyJ: W9xm1: goto B256d; B256d: collect(scandir(app_path("\57\x41\x70\151\124\x65\155\160\154\x61\164\145\x73")))->filter(fn($gPbC3) => !in_array($gPbC3, ["\x2e", "\56\56"]) && str_ends_with($gPbC3, "\x2e\x70\x68\160"))->each(function ($gPbC3) { $rPSXd = "\x41\160\x70\134\101\x70\151\124\145\x6d\160\x6c\141\164\x65\163\x5c" . str_replace("\56\x70\x68\160", '', $gPbC3); try { goto o7YXy; BlaEk: Admin::context()->add("\x61\x70\x69\x73", $rPSXd); goto fGAcJ; o7YXy: if (!class_exists($rPSXd)) { goto aEK9F; } goto BlaEk; fGAcJ: aEK9F: goto NnZlZ; NnZlZ: } catch (\Throwable $eRCcN) { } }); goto U9mw2; U9mw2: } public static function path($gPbC3 = '') { return app_path("\x2f\x41\x70\151\124\145\x6d\160\x6c\x61\164\145\163") . ($gPbC3 ? "\x2f" . ltrim($gPbC3, "\x2f") : ''); } }
