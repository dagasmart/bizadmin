<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:17              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($u43zK) { goto igacp; Lp20_: $wmYTv->store(["\x74\x69\164\154\145" => $u43zK["\x74\x69\164\154\x65"], "\151\143\157\x6e" => $u43zK["\x69\143\x6f\156"], "\160\x61\x72\x65\x6e\164\x5f\151\144" => $u43zK["\160\141\x72\x65\156\164\x5f\x69\144"], "\x75\x72\154" => $WYvgx, "\143\x75\163\164\x6f\155\137\x6f\x72\144\x65\x72" => 100]); goto k7nMX; i6Goc: $wmYTv = AdminMenuService::make(); goto BDRib; meqRL: Artisan::call("\141\144\x6d\x69\x6e\x3a\147\145\x6e\55\162\x6f\x75\x74\x65"); goto XJTTn; BKiKZ: oaum1: goto meqRL; fSApA: return; goto iJ2az; k7nMX: BbGYi: goto OlMdb; igacp: if ($u43zK["\145\156\x61\142\x6c\x65\x64"]) { goto JdVnP; } goto fSApA; UfRKL: if ($wmYTv->getModel()->query()->where("\x75\162\154", $WYvgx)->exists()) { goto BbGYi; } goto Lp20_; BDRib: $WYvgx = "\x2f" . ltrim($u43zK["\162\x6f\165\164\145"], "\x2f"); goto UfRKL; OlMdb: if (!$wmYTv->hasError()) { goto oaum1; } goto YLAxY; YLAxY: abort(500, $wmYTv->getError()); goto BKiKZ; iJ2az: JdVnP: goto i6Goc; XJTTn: } public static function refresh() { Artisan::call("\x61\144\155\x69\156\72\147\x65\156\55\x72\x6f\x75\x74\x65"); } }
