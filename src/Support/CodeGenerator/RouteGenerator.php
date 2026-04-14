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
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($u43zK) { goto vwWsL; WzpyC: $wmYTv = AdminMenuService::make(); goto cnR_j; b_1oj: $wmYTv->store(["\164\151\164\x6c\145" => $u43zK["\164\151\x74\x6c\145"], "\x69\143\157\156" => $u43zK["\151\143\157\156"], "\x70\141\x72\145\156\164\x5f\x69\144" => $u43zK["\160\141\162\x65\156\164\137\x69\144"], "\x75\162\x6c" => $WYvgx, "\x63\x75\x73\x74\x6f\155\x5f\x6f\162\144\x65\162" => 100]); goto OMb_3; u0ltD: abort(500, $wmYTv->getError()); goto rDfBW; cnR_j: $WYvgx = "\57" . ltrim($u43zK["\162\157\165\x74\x65"], "\57"); goto E_bHj; vwWsL: if ($u43zK["\145\156\x61\142\x6c\x65\x64"]) { goto lyXAZ; } goto vUqUp; OMb_3: ls7NX: goto yhZyY; yhZyY: if (!$wmYTv->hasError()) { goto wF6zK; } goto u0ltD; rDfBW: wF6zK: goto uU1vu; HIdel: lyXAZ: goto WzpyC; E_bHj: if ($wmYTv->getModel()->query()->where("\x75\162\154", $WYvgx)->exists()) { goto ls7NX; } goto b_1oj; uU1vu: Artisan::call("\141\144\155\151\x6e\x3a\147\145\156\x2d\162\x6f\165\164\x65"); goto qap17; vUqUp: return; goto HIdel; qap17: } public static function refresh() { Artisan::call("\x61\144\x6d\x69\156\x3a\x67\145\156\55\x72\157\165\x74\145"); } }
