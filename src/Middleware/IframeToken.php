<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Middleware; use Closure; use Illuminate\Http\Request; class IframeToken { public function handle(Request $BmpF6, Closure $RvVDs) { goto OQhy5; XIGDQ: if (!($whKv7 && !$BmpF6->bearerToken())) { goto sA4JE; } goto sFR9y; of5oo: return $RvVDs($BmpF6); goto GwryZ; sFR9y: $BmpF6->headers->set("\x41\x75\164\150\x6f\x72\151\x7a\141\x74\151\157\156", "\102\145\x61\x72\x65\x72\40" . $whKv7); goto xHKe0; xHKe0: sA4JE: goto of5oo; OQhy5: $whKv7 = $BmpF6->query("\x5f\x69\x66\162\141\155\x65\137\164\157\153\145\156"); goto XIGDQ; GwryZ: } }
