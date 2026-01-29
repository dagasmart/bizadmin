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
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Services\AdminRelationshipService; class Relationships { public static function boot() { goto EkMmi; k6MeL: return; goto Wb_cX; AHVTV: if (Admin::hasTable($B9647->getModel()->getTable())) { goto GXsqY; } goto BsmLy; yrPl2: W4IUL: goto h7Gmo; EkMmi: $B9647 = new AdminRelationshipService(); goto AHVTV; B7zq_: if (!blank($P3Z9t)) { goto ZxQZi; } goto k6MeL; BsmLy: return; goto qtjxE; qtjxE: GXsqY: goto XZtGK; CZ5yB: foreach ($P3Z9t as $zZvw1) { try { $zZvw1->model::resolveRelationUsing($zZvw1->title, function ($ru9lv) use($zZvw1) { $V_yoa = $zZvw1->method; return $ru9lv->{$V_yoa}(...array_column($zZvw1->buildArgs(), "\166\x61\x6c\x75\x65")); }); } catch (\Throwable $r2JVV) { } VuEe8: } goto yrPl2; XZtGK: $P3Z9t = $B9647->make()->getAll(); goto B7zq_; Wb_cX: ZxQZi: goto CZ5yB; h7Gmo: } }
