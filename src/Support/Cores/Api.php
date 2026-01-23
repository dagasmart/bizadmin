<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Support\Apis\{DataListApi, DataCreateApi, DataDetailApi, DataDeleteApi, DataUpdateApi, GetSettingsApi, OptionsApi, SaveSettingsApi}; class Api { public static function boot() { goto xmMrg; xmMrg: Admin::context()->set("\x61\160\151\x73", [DataListApi::class, DataCreateApi::class, DataDetailApi::class, DataDeleteApi::class, DataUpdateApi::class, OptionsApi::class, GetSettingsApi::class, SaveSettingsApi::class]); goto xj8yW; EJsA5: collect(scandir(app_path("\57\x41\160\151\124\x65\155\x70\154\141\164\145\163")))->filter(fn($PPQ7r) => !in_array($PPQ7r, ["\x2e", "\x2e\x2e"]) && str_ends_with($PPQ7r, "\x2e\x70\150\160"))->each(function ($PPQ7r) { $dxBcX = "\x41\x70\x70\x5c\101\x70\x69\x54\x65\155\x70\154\x61\x74\x65\x73\x5c" . str_replace("\x2e\160\150\160", '', $PPQ7r); try { goto hbC_I; hbC_I: if (!class_exists($dxBcX)) { goto EVIlC; } goto oDB2S; oDB2S: Admin::context()->add("\141\160\151\x73", $dxBcX); goto p7WrD; p7WrD: EVIlC: goto srjYp; srjYp: } catch (\Throwable $IiXrz) { } }); goto pE7p0; v8zSv: UcLIv: goto EJsA5; Patop: return; goto v8zSv; xj8yW: if (is_dir(self::path())) { goto UcLIv; } goto Patop; pE7p0: } public static function path($PPQ7r = '') { return app_path("\57\x41\x70\151\124\145\155\x70\154\x61\164\x65\163") . ($PPQ7r ? "\57" . ltrim($PPQ7r, "\57") : ''); } }
