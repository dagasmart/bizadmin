<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:49              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use DagaSmart\BizAdmin\Admin; use DagaSmart\BizAdmin\Services\AdminRelationshipService; class Relationships { public static function boot() { goto HdeKU; MQin5: return; goto Zg1T_; jUAr4: return; goto CkFii; Zg1T_: NQR4X: goto w8yRu; bi4LT: foreach ($U81Pf as $sl00c) { try { $sl00c->model::resolveRelationUsing($sl00c->title, function ($Va95y) use($sl00c) { $mDWSz = $sl00c->method; return $Va95y->{$mDWSz}(...array_column($sl00c->buildArgs(), "\166\141\154\165\x65")); }); } catch (\Throwable $nEc3H) { } hOTIu: } goto WQVmN; kmcqY: if (Admin::hasTable($lZUkh->getModel()->getTable())) { goto NQR4X; } goto MQin5; WQVmN: teU7U: goto MCKVS; Ozc8f: if (!blank($U81Pf)) { goto nnhrp; } goto jUAr4; w8yRu: $U81Pf = $lZUkh->make()->getAll(); goto Ozc8f; CkFii: nnhrp: goto bi4LT; HdeKU: $lZUkh = new AdminRelationshipService(); goto kmcqY; MCKVS: } }
