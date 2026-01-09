<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($Z8bC3) { goto qO_cg; IKMqd: XQohe: goto J43rB; J43rB: Artisan::call("\141\144\155\151\x6e\72\x67\145\156\x2d\162\x6f\165\x74\x65"); goto lLJxP; aDrp2: abort(500, $C2hNh->getError()); goto IKMqd; ksA6N: return; goto U6ygP; qO_cg: if ($Z8bC3["\x65\156\x61\x62\x6c\x65\x64"]) { goto h6qHm; } goto ksA6N; qvGsC: if ($C2hNh->getModel()->query()->where("\165\162\x6c", $iZ00M)->exists()) { goto V8MoO; } goto y6cA1; mxnVH: $C2hNh = AdminMenuService::make(); goto no_Uf; no_Uf: $iZ00M = "\57" . ltrim($Z8bC3["\162\x6f\165\164\x65"], "\57"); goto qvGsC; y6cA1: $C2hNh->store(["\x74\x69\164\154\x65" => $Z8bC3["\164\151\164\154\x65"], "\x69\143\x6f\x6e" => $Z8bC3["\x69\143\x6f\156"], "\160\141\162\x65\156\x74\137\151\144" => $Z8bC3["\160\141\x72\145\156\164\x5f\x69\x64"], "\165\x72\x6c" => $iZ00M, "\143\x75\163\164\157\x6d\x5f\x6f\162\x64\x65\162" => 100]); goto coioG; U6ygP: h6qHm: goto mxnVH; coioG: V8MoO: goto a4JdC; a4JdC: if (!$C2hNh->hasError()) { goto XQohe; } goto aDrp2; lLJxP: } public static function refresh() { Artisan::call("\141\144\155\x69\x6e\x3a\147\145\156\x2d\162\157\x75\164\145"); } }
