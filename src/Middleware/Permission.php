<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:41              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use DagaSmart\BizAdmin\Admin; use Illuminate\Http\Request; class Permission { public function handle(Request $nM8iW, Closure $D4QGv, ...$nNGiY) { goto jq3jp; YNtHr: bXt8p: goto o0Vpw; hdCB1: return Admin::response()->fail(admin_trans("\x61\x64\155\151\x6e\56\x75\156\141\165\x74\x68\157\x72\x69\172\145\x64")); goto YNtHr; jq3jp: if (!Admin::permission()->permissionIntercept($nM8iW, $nNGiY)) { goto bXt8p; } goto hdCB1; o0Vpw: return $D4QGv($nM8iW); goto LXUhA; LXUhA: } }
