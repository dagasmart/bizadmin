<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:21              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($u43zK) { goto nAMOw; QDPqF: $WYvgx = "\x2f" . ltrim($u43zK["\162\157\165\164\x65"], "\57"); goto rd2gO; ETYl8: mgzZK: goto XKRc4; Hz3vd: Qaucm: goto NorxE; XKRc4: $wmYTv = AdminMenuService::make(); goto QDPqF; rd2gO: if ($wmYTv->getModel()->query()->where("\x75\x72\x6c", $WYvgx)->exists()) { goto dlxcz; } goto yQ6rl; zY1wl: return; goto ETYl8; yQ6rl: $wmYTv->store(["\164\151\164\154\x65" => $u43zK["\164\151\164\154\x65"], "\x69\x63\157\x6e" => $u43zK["\151\143\157\156"], "\160\x61\162\145\156\x74\x5f\151\x64" => $u43zK["\160\x61\162\145\x6e\164\x5f\x69\144"], "\x75\162\154" => $WYvgx, "\143\165\x73\x74\157\x6d\137\x6f\162\x64\145\x72" => 100]); goto xTEEh; NorxE: Artisan::call("\141\x64\155\151\x6e\x3a\147\145\156\x2d\x72\x6f\165\164\145"); goto SE3iH; xTEEh: dlxcz: goto YaTy3; nQWTK: abort(500, $wmYTv->getError()); goto Hz3vd; YaTy3: if (!$wmYTv->hasError()) { goto Qaucm; } goto nQWTK; nAMOw: if ($u43zK["\x65\x6e\x61\x62\154\x65\x64"]) { goto mgzZK; } goto zY1wl; SE3iH: } public static function refresh() { Artisan::call("\x61\x64\155\151\156\x3a\147\x65\156\55\162\x6f\x75\x74\145"); } }
