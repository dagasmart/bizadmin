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
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($MPi6Y) { goto CCgTH; sU8tB: if ($aeq5n->getModel()->query()->where("\x75\162\154", $hIqnv)->exists()) { goto MFlOk; } goto PcSX5; gQzqh: $aeq5n = AdminMenuService::make(); goto R1I9C; R0B5l: MFlOk: goto oAyjP; CCgTH: if ($MPi6Y["\145\156\141\x62\x6c\x65\x64"]) { goto Pg_SF; } goto scwSp; oAyjP: if (!$aeq5n->hasError()) { goto u1wZc; } goto Vslno; scwSp: return; goto P1qdm; E4vYZ: Artisan::call("\x61\144\155\x69\156\x3a\147\145\x6e\x2d\162\x6f\165\164\145"); goto S2cgB; R1I9C: $hIqnv = "\57" . ltrim($MPi6Y["\162\157\x75\x74\x65"], "\x2f"); goto sU8tB; ijfKS: u1wZc: goto E4vYZ; Vslno: abort(500, $aeq5n->getError()); goto ijfKS; PcSX5: $aeq5n->store(["\164\151\164\x6c\x65" => $MPi6Y["\x74\x69\x74\x6c\145"], "\151\143\157\x6e" => $MPi6Y["\x69\x63\157\x6e"], "\x70\x61\162\x65\x6e\164\x5f\151\144" => $MPi6Y["\x70\141\x72\145\156\164\137\151\144"], "\165\162\x6c" => $hIqnv, "\143\165\163\x74\x6f\155\137\157\x72\144\145\162" => 100]); goto R0B5l; P1qdm: Pg_SF: goto gQzqh; S2cgB: } public static function refresh() { Artisan::call("\141\144\155\151\156\x3a\x67\145\x6e\55\162\x6f\x75\164\x65"); } }
