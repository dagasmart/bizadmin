<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:53              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto ustf7; v91R5: return; goto bG_4T; bG_4T: gEoWI: goto UmWX9; dEI2g: if (is_dir(self::path())) { goto gEoWI; } goto v91R5; UmWX9: collect(scandir(app_path("\x2f\101\x70\151\124\x65\155\x70\154\x61\x74\145\x73")))->filter(fn($D5sB5) => !in_array($D5sB5, ["\56", "\x2e\x2e"]) && str_ends_with($D5sB5, "\56\x70\150\x70"))->each(function ($D5sB5) { $PZri0 = "\101\160\x70\x5c\x41\160\151\x54\145\155\x70\154\141\164\x65\x73\134" . str_replace("\x2e\160\150\x70", '', $D5sB5); try { goto WFUvK; dsPg9: Admin::context()->add("\141\x70\151\x73", $PZri0); goto Gg9pY; WFUvK: if (!class_exists($PZri0)) { goto DxVbf; } goto dsPg9; Gg9pY: DxVbf: goto gdYlj; gdYlj: } catch (\Throwable $vPj2f) { } }); goto qZnzh; ustf7: Admin::context()->set("\141\x70\x69\163", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto dEI2g; qZnzh: } public static function path($D5sB5 = '') { return app_path("\x2f\x41\x70\151\x54\x65\x6d\160\x6c\x61\x74\x65\x73") . ($D5sB5 ? "\x2f" . ltrim($D5sB5, "\57") : ''); } }
