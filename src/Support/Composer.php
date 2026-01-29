<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto LcQ0e; LcQ0e: if (static::$loader) { goto eapsq; } goto W_IRj; iqhJq: return static::$loader; goto yxPXB; hQs1X: eapsq: goto iqhJq; W_IRj: static::$loader = (include base_path() . "\x2f\x76\x65\156\x64\x6f\162\x2f\141\x75\x74\157\x6c\x6f\x61\144\56\x70\x68\x70"); goto hQs1X; yxPXB: } public static function parse(?string $nk9G6) { return new ComposerProperty(static::fromJson($nk9G6)); } public static function getVersion(?string $rliTk, ?string $en2xv = null) { goto Dxf7_; UYMY_: $en2xv = $en2xv ?: base_path("\x63\x6f\155\x70\x6f\x73\145\x72\56\154\157\x63\153"); goto YU1IB; Qj9Gw: return $GdVeY["\166\x65\x72\x73\x69\157\x6e"] ?? null; goto rNk2n; sbzyM: return null; goto Jsmze; Dxf7_: if ($rliTk) { goto k1bin; } goto sbzyM; YU1IB: $GdVeY = collect(static::fromJson($en2xv)["\160\x61\143\153\141\x67\x65\x73"] ?? [])->filter(function ($PfrF0) use($rliTk) { return $PfrF0["\156\141\155\x65"] == $rliTk; })->first(); goto Qj9Gw; Jsmze: k1bin: goto UYMY_; rNk2n: } public static function fromJson(?string $nk9G6) { goto sXz5X; Cw2Fd: if (!(!$nk9G6 || !is_file($nk9G6))) { goto Pd1bp; } goto AiNoc; AiNoc: return static::$files[$nk9G6] = []; goto PA1uq; V59JJ: return static::$files[$nk9G6] = []; goto eBzhg; ORlTk: return static::$files[$nk9G6]; goto AsjDL; sXz5X: if (!isset(static::$files[$nk9G6])) { goto rTON5; } goto ORlTk; PA1uq: Pd1bp: goto F111G; F111G: try { return static::$files[$nk9G6] = (array) json_decode(app("\x66\x69\154\x65\x73")->get($nk9G6), true); } catch (\Throwable $r2JVV) { } goto V59JJ; AsjDL: rTON5: goto Cw2Fd; eBzhg: } }
