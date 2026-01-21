<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:53              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto U0Kro; cllkK: L_8le: goto pWcAb; MJf42: static::$loader = (include base_path() . "\x2f\166\x65\156\x64\x6f\x72\x2f\141\x75\x74\x6f\x6c\x6f\x61\144\56\160\x68\160"); goto cllkK; U0Kro: if (static::$loader) { goto L_8le; } goto MJf42; pWcAb: return static::$loader; goto LmxtA; LmxtA: } public static function parse(?string $XVxRx) { return new ComposerProperty(static::fromJson($XVxRx)); } public static function getVersion(?string $iF1L2, ?string $XalnH = null) { goto SqGSo; ZuNuL: $XalnH = $XalnH ?: base_path("\x63\x6f\x6d\160\x6f\163\145\x72\56\154\x6f\143\153"); goto l0brG; l0brG: $tBZ2G = collect(static::fromJson($XalnH)["\x70\141\143\x6b\x61\147\x65\x73"] ?? [])->filter(function ($OmZ0e) use($iF1L2) { return $OmZ0e["\156\x61\x6d\145"] == $iF1L2; })->first(); goto u1NxF; u1NxF: return $tBZ2G["\x76\x65\162\163\151\x6f\156"] ?? null; goto HNH1l; qBfnE: pi10r: goto ZuNuL; aZEFg: return null; goto qBfnE; SqGSo: if ($iF1L2) { goto pi10r; } goto aZEFg; HNH1l: } public static function fromJson(?string $XVxRx) { goto MdDt2; O3sJX: return static::$files[$XVxRx]; goto B_83g; u7hG8: kIElA: goto EdNpS; IYZD0: return static::$files[$XVxRx] = []; goto u7hG8; EdNpS: try { return static::$files[$XVxRx] = (array) json_decode(app("\146\x69\x6c\x65\x73")->get($XVxRx), true); } catch (\Throwable $vPj2f) { } goto juF6_; MdDt2: if (!isset(static::$files[$XVxRx])) { goto ZrC0F; } goto O3sJX; juF6_: return static::$files[$XVxRx] = []; goto NpVA4; B_83g: ZrC0F: goto qKnJZ; qKnJZ: if (!(!$XVxRx || !is_file($XVxRx))) { goto kIElA; } goto IYZD0; NpVA4: } }
