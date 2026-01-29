<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:24              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($u43zK) { goto Y3iVX; lC0Zk: Artisan::call("\x61\144\155\151\156\x3a\147\x65\156\x2d\x72\157\x75\164\x65"); goto xHg0Z; jIW3x: FxLhR: goto lC0Zk; j9Qwm: return; goto Hxfvh; uJcMh: $WYvgx = "\x2f" . ltrim($u43zK["\162\157\165\x74\145"], "\57"); goto rlsoJ; Hxfvh: DpifJ: goto nXLtX; rlsoJ: if ($wmYTv->getModel()->query()->where("\x75\x72\x6c", $WYvgx)->exists()) { goto Wwqlb; } goto Qw9My; Qw9My: $wmYTv->store(["\164\x69\164\x6c\x65" => $u43zK["\164\x69\164\154\145"], "\x69\x63\x6f\x6e" => $u43zK["\151\143\157\156"], "\160\141\162\x65\x6e\x74\137\x69\x64" => $u43zK["\160\141\162\x65\156\164\137\151\x64"], "\x75\162\154" => $WYvgx, "\x63\x75\163\x74\157\x6d\x5f\x6f\162\x64\145\162" => 100]); goto XP5jx; FqxGZ: if (!$wmYTv->hasError()) { goto FxLhR; } goto f36Us; Y3iVX: if ($u43zK["\145\x6e\x61\x62\x6c\145\x64"]) { goto DpifJ; } goto j9Qwm; nXLtX: $wmYTv = AdminMenuService::make(); goto uJcMh; f36Us: abort(500, $wmYTv->getError()); goto jIW3x; XP5jx: Wwqlb: goto FqxGZ; xHg0Z: } public static function refresh() { Artisan::call("\x61\144\155\x69\156\72\147\145\x6e\55\x72\157\x75\164\x65"); } }
