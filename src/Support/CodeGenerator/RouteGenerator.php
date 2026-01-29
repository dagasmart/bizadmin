<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\CodeGenerator; use Illuminate\Support\Facades\Artisan; use DagaSmart\BizAdmin\Services\AdminMenuService; class RouteGenerator { public static function handle($ll0pQ) { goto F3N9t; Hd3X1: if ($NfD5d->getModel()->query()->where("\165\162\x6c", $JOJnJ)->exists()) { goto DA2z6; } goto WfWo6; oZy5Q: Artisan::call("\141\x64\155\x69\x6e\x3a\147\145\x6e\x2d\162\157\165\x74\145"); goto i0nDb; WuMxQ: txatO: goto oZy5Q; eacv5: DA2z6: goto E2x81; BA5jU: P6GiS: goto wAB1s; WfWo6: $NfD5d->store(["\164\x69\164\x6c\145" => $ll0pQ["\x74\151\164\x6c\145"], "\x69\143\157\156" => $ll0pQ["\151\143\157\x6e"], "\160\141\162\145\156\164\x5f\151\144" => $ll0pQ["\160\x61\162\x65\x6e\x74\137\x69\144"], "\165\162\154" => $JOJnJ, "\x63\x75\163\164\x6f\x6d\137\157\162\144\x65\x72" => 100]); goto eacv5; E2x81: if (!$NfD5d->hasError()) { goto txatO; } goto iVqWK; iVqWK: abort(500, $NfD5d->getError()); goto WuMxQ; wAB1s: $NfD5d = AdminMenuService::make(); goto vkEZk; F3N9t: if ($ll0pQ["\145\156\141\x62\x6c\x65\x64"]) { goto P6GiS; } goto poAo0; poAo0: return; goto BA5jU; vkEZk: $JOJnJ = "\x2f" . ltrim($ll0pQ["\x72\x6f\x75\164\x65"], "\57"); goto Hd3X1; i0nDb: } public static function refresh() { Artisan::call("\141\x64\155\x69\156\72\147\145\x6e\x2d\x72\157\x75\x74\145"); } }
