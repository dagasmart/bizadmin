<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Services\AdminRelationshipService; class Relationships { public static function boot() { goto HarZW; eZARC: return; goto ZO2WQ; ysBd9: Gka1C: goto cTu89; HarZW: $SW2k3 = new AdminRelationshipService(); goto gT_R7; V6OOp: if (!blank($T1QVi)) { goto QuJq4; } goto eZARC; gUOqS: foreach ($T1QVi as $YEjWc) { try { $YEjWc->model::resolveRelationUsing($YEjWc->title, function ($ym6xK) use($YEjWc) { $sJodL = $YEjWc->method; return $ym6xK->{$sJodL}(...array_column($YEjWc->buildArgs(), "\x76\x61\154\165\x65")); }); } catch (\Throwable $gisIz) { } XdoEZ: } goto ysBd9; EG_Gw: return; goto KhF9C; ZO2WQ: QuJq4: goto gUOqS; KhF9C: nVuaP: goto vNoLl; gT_R7: if (Admin::hasTable($SW2k3->getModel()->getTable())) { goto nVuaP; } goto EG_Gw; vNoLl: $T1QVi = $SW2k3->make()->getAll(); goto V6OOp; cTu89: } }
