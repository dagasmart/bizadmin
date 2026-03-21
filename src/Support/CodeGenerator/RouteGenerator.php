<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:35              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($jdQih) { goto eQN2n; fKXY7: $p6Tnk->store(["\164\x69\x74\154\x65" => $jdQih["\164\151\164\154\x65"], "\x69\143\157\x6e" => $jdQih["\x69\143\157\x6e"], "\x70\x61\x72\145\x6e\x74\x5f\x69\x64" => $jdQih["\x70\x61\162\145\x6e\x74\137\151\144"], "\165\162\154" => $Oe6xb, "\143\x75\x73\164\x6f\x6d\x5f\157\162\x64\145\162" => 100]); goto HN2VR; MLlZA: if ($p6Tnk->getModel()->query()->where("\x75\x72\154", $Oe6xb)->exists()) { goto opJF1; } goto fKXY7; c8MsM: abort(500, $p6Tnk->getError()); goto jCFR9; eQN2n: if ($jdQih["\145\x6e\141\x62\x6c\145\144"]) { goto zQR9b; } goto Nb8p7; HN2VR: opJF1: goto JtItG; Nb8p7: return; goto PdpNT; jCFR9: RO5F9: goto C7hR2; WKOZl: $p6Tnk = AdminMenuService::make(); goto p2_TF; PdpNT: zQR9b: goto WKOZl; C7hR2: Artisan::call("\141\x64\155\x69\x6e\x3a\x67\145\x6e\x2d\162\x6f\x75\x74\145"); goto OruvI; JtItG: if (!$p6Tnk->hasError()) { goto RO5F9; } goto c8MsM; p2_TF: $Oe6xb = "\57" . ltrim($jdQih["\162\157\165\x74\145"], "\x2f"); goto MLlZA; OruvI: } public static function refresh() { Artisan::call("\x61\x64\155\151\x6e\x3a\x67\x65\x6e\x2d\x72\x6f\x75\164\x65"); } }
