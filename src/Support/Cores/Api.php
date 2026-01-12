<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto o3q2z; HYiJZ: if (is_dir(self::path())) { goto eQOeQ; } goto o40mc; fS42W: collect(scandir(app_path("\57\101\x70\151\x54\145\155\x70\154\x61\x74\x65\x73")))->filter(fn($VWXTE) => !in_array($VWXTE, ["\56", "\56\56"]) && str_ends_with($VWXTE, "\56\x70\150\x70"))->each(function ($VWXTE) { $GXAWE = "\101\x70\x70\x5c\101\160\x69\x54\x65\x6d\160\x6c\141\x74\x65\x73\134" . str_replace("\56\160\x68\x70", '', $VWXTE); try { goto kF8Wb; kF8Wb: if (!class_exists($GXAWE)) { goto dk3_4; } goto snKse; ECsSG: dk3_4: goto q0ggk; snKse: Admin::context()->add("\x61\x70\151\163", $GXAWE); goto ECsSG; q0ggk: } catch (\Throwable $bBnMB) { } }); goto gcTB9; x1PPc: eQOeQ: goto fS42W; o3q2z: Admin::context()->set("\141\x70\x69\x73", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto HYiJZ; o40mc: return; goto x1PPc; gcTB9: } public static function path($VWXTE = '') { return app_path("\57\101\x70\x69\x54\145\x6d\x70\x6c\141\164\x65\163") . ($VWXTE ? "\x2f" . ltrim($VWXTE, "\x2f") : ''); } }
