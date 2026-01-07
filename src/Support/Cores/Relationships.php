<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Services\AdminRelationshipService; class Relationships { public static function boot() { goto Ktepr; Dq8VL: ScnKg: goto z89EW; HoDwz: if (Admin::hasTable($uyv6U->getModel()->getTable())) { goto J2Ala; } goto Mt0fY; FBD44: $CeeQ0 = $uyv6U->make()->getAll(); goto J3LkK; UfExH: return; goto Dq8VL; mteev: N3LTg: goto Dk5Gp; z89EW: foreach ($CeeQ0 as $wbZmW) { try { $wbZmW->model::resolveRelationUsing($wbZmW->title, function ($oh_kY) use($wbZmW) { $pMJlN = $wbZmW->method; return $oh_kY->{$pMJlN}(...array_column($wbZmW->buildArgs(), "\166\x61\154\x75\x65")); }); } catch (\Throwable $Z3JTx) { } XeQGl: } goto mteev; J3LkK: if (!blank($CeeQ0)) { goto ScnKg; } goto UfExH; AC03y: J2Ala: goto FBD44; Mt0fY: return; goto AC03y; Ktepr: $uyv6U = new AdminRelationshipService(); goto HoDwz; Dk5Gp: } }
