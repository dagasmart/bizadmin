<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Services\AdminRelationshipService; class Relationships { public static function boot() { goto mCiUH; hIn3T: if (Admin::hasTable($t9HR0->getModel()->getTable())) { goto xDgJd; } goto Yq1qN; vzvoc: foreach ($hksVc as $iWtAE) { try { $iWtAE->model::resolveRelationUsing($iWtAE->title, function ($vzUfg) use($iWtAE) { $H2xsA = $iWtAE->method; return $vzUfg->{$H2xsA}(...array_column($iWtAE->buildArgs(), "\166\141\x6c\165\145")); }); } catch (\Throwable $N4FzU) { } uAdPC: } goto huxGp; toHOo: $hksVc = $t9HR0->make()->getAll(); goto eV_MX; HwIkz: xDgJd: goto toHOo; eV_MX: if (!blank($hksVc)) { goto vRhEF; } goto nUpfl; nUpfl: return; goto SgXqB; Yq1qN: return; goto HwIkz; huxGp: va3qq: goto SF562; mCiUH: $t9HR0 = new AdminRelationshipService(); goto hIn3T; SgXqB: vRhEF: goto vzvoc; SF562: } }
