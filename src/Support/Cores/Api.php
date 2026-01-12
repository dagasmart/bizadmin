<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto npChB; uO8sE: collect(scandir(app_path("\57\x41\x70\151\124\x65\x6d\x70\x6c\141\164\x65\x73")))->filter(fn($dKh42) => !in_array($dKh42, ["\56", "\x2e\x2e"]) && str_ends_with($dKh42, "\56\160\x68\x70"))->each(function ($dKh42) { $ZDeYw = "\101\x70\160\134\x41\160\151\x54\x65\x6d\160\x6c\x61\x74\145\x73\x5c" . str_replace("\x2e\160\150\x70", '', $dKh42); try { goto UQ6jE; UQ6jE: if (!class_exists($ZDeYw)) { goto ZPA_q; } goto t3yjz; gAuVR: ZPA_q: goto PH1xJ; t3yjz: Admin::context()->add("\x61\x70\x69\x73", $ZDeYw); goto gAuVR; PH1xJ: } catch (\Throwable $YZkjO) { } }); goto ttkLs; z92GQ: return; goto OyEps; OyEps: fu0lb: goto uO8sE; T3_1s: if (is_dir(self::path())) { goto fu0lb; } goto z92GQ; npChB: Admin::context()->set("\x61\160\x69\163", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto T3_1s; ttkLs: } public static function path($dKh42 = '') { return app_path("\x2f\x41\160\x69\x54\x65\155\x70\154\x61\164\x65\163") . ($dKh42 ? "\x2f" . ltrim($dKh42, "\x2f") : ''); } }
