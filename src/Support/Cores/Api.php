<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:00              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto Iu03T; MoAYr: g9WRt: goto DZkt_; Iu03T: Admin::context()->set("\x61\160\151\163", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto XFY0Q; XFY0Q: if (is_dir(self::path())) { goto g9WRt; } goto tNFJQ; tNFJQ: return; goto MoAYr; DZkt_: collect(scandir(app_path("\57\101\160\151\124\145\155\x70\154\141\x74\145\163")))->filter(fn($E9sff) => !in_array($E9sff, ["\56", "\x2e\56"]) && str_ends_with($E9sff, "\x2e\160\x68\160"))->each(function ($E9sff) { $uh8J0 = "\x41\160\160\134\x41\160\151\x54\145\x6d\160\x6c\x61\x74\x65\x73\x5c" . str_replace("\56\x70\150\x70", '', $E9sff); try { goto cICw3; sOfUA: Admin::context()->add("\141\x70\x69\x73", $uh8J0); goto M2Aik; M2Aik: wPGq3: goto JtRKp; cICw3: if (!class_exists($uh8J0)) { goto wPGq3; } goto sOfUA; JtRKp: } catch (\Throwable $I2kMx) { } }); goto BgA8W; BgA8W: } public static function path($E9sff = '') { return app_path("\x2f\x41\160\151\124\x65\x6d\x70\154\141\164\x65\163") . ($E9sff ? "\57" . ltrim($E9sff, "\57") : ''); } }
