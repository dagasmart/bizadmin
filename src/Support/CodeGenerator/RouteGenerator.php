<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($J1kfP) { goto WaJtJ; Lq92w: return; goto wb3QU; WaJtJ: if ($J1kfP["\145\156\141\142\x6c\x65\144"]) { goto l8ErH; } goto Lq92w; Ua0Uk: $ADz97->store(["\164\x69\164\x6c\145" => $J1kfP["\164\151\x74\154\x65"], "\151\x63\x6f\x6e" => $J1kfP["\x69\x63\157\x6e"], "\x70\141\x72\x65\x6e\x74\x5f\x69\144" => $J1kfP["\x70\141\162\x65\156\x74\x5f\151\x64"], "\x75\162\x6c" => $OJ2HI, "\x63\165\x73\x74\x6f\155\x5f\x6f\162\x64\x65\162" => 100]); goto dhWUw; XWxCY: $OJ2HI = "\x2f" . ltrim($J1kfP["\x72\x6f\x75\164\x65"], "\57"); goto tJqAq; BO46W: $ADz97 = AdminMenuService::make(); goto XWxCY; lKqo_: jz99S: goto MO7ny; klw1n: abort(500, $ADz97->getError()); goto lKqo_; wb3QU: l8ErH: goto BO46W; tJqAq: if ($ADz97->getModel()->query()->where("\165\162\154", $OJ2HI)->exists()) { goto BKN2q; } goto Ua0Uk; MO7ny: Artisan::call("\141\144\155\151\x6e\x3a\x67\145\x6e\x2d\162\157\165\164\145"); goto iVuxH; dhWUw: BKN2q: goto I8mSO; I8mSO: if (!$ADz97->hasError()) { goto jz99S; } goto klw1n; iVuxH: } public static function refresh() { Artisan::call("\141\144\x6d\151\156\72\x67\145\x6e\55\162\157\x75\164\x65"); } }
