<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:47              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($xWSsB) { goto SDktF; nZU9R: $ODwOF = AdminMenuService::make(); goto FLavE; v2LPk: return; goto BLzJ3; SDktF: if ($xWSsB["\145\x6e\141\142\154\x65\x64"]) { goto hGu6B; } goto v2LPk; TIFs7: if ($ODwOF->getModel()->query()->where("\165\162\154", $LZnB8)->exists()) { goto UoCcc; } goto nKsXZ; ISW4P: Artisan::call("\x61\144\155\151\x6e\x3a\147\x65\x6e\55\162\x6f\x75\x74\145"); goto Q6WmA; toK3s: xlfWc: goto ISW4P; R5RSH: abort(500, $ODwOF->getError()); goto toK3s; BLzJ3: hGu6B: goto nZU9R; FLavE: $LZnB8 = "\57" . ltrim($xWSsB["\162\x6f\x75\x74\x65"], "\57"); goto TIFs7; Kn3_Q: if (!$ODwOF->hasError()) { goto xlfWc; } goto R5RSH; nKsXZ: $ODwOF->store(["\x74\151\164\154\145" => $xWSsB["\x74\x69\164\154\145"], "\x69\143\x6f\156" => $xWSsB["\151\x63\157\156"], "\x70\x61\162\145\156\164\137\151\144" => $xWSsB["\160\x61\162\x65\x6e\164\x5f\x69\144"], "\x75\x72\154" => $LZnB8, "\143\165\x73\x74\157\x6d\x5f\157\162\x64\145\162" => 100]); goto OUrAw; OUrAw: UoCcc: goto Kn3_Q; Q6WmA: } public static function refresh() { Artisan::call("\x61\x64\x6d\x69\156\x3a\x67\145\x6e\55\x72\157\x75\x74\145"); } }
