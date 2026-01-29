<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto vXAAq; vXAAq: Admin::context()->set("\x61\160\x69\163", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto Phj1J; GAQfF: wkfu4: goto f5HaY; Phj1J: if (is_dir(self::path())) { goto wkfu4; } goto nHP3o; f5HaY: collect(scandir(app_path("\57\x41\160\151\124\x65\x6d\x70\x6c\x61\164\145\163")))->filter(fn($uvz5F) => !in_array($uvz5F, ["\x2e", "\56\x2e"]) && str_ends_with($uvz5F, "\x2e\160\x68\x70"))->each(function ($uvz5F) { $OYgoK = "\101\160\x70\134\101\x70\151\x54\145\155\160\x6c\x61\x74\x65\x73\x5c" . str_replace("\56\160\150\x70", '', $uvz5F); try { goto AZDRM; VOnoa: DMODN: goto xV6Kt; w03Lu: Admin::context()->add("\141\x70\x69\x73", $OYgoK); goto VOnoa; AZDRM: if (!class_exists($OYgoK)) { goto DMODN; } goto w03Lu; xV6Kt: } catch (\Throwable $r2JVV) { } }); goto swaqN; nHP3o: return; goto GAQfF; swaqN: } public static function path($uvz5F = '') { return app_path("\57\x41\160\151\124\145\155\x70\x6c\141\164\x65\163") . ($uvz5F ? "\x2f" . ltrim($uvz5F, "\x2f") : ''); } }
