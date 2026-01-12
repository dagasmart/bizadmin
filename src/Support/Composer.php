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
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto bOy82; gvGOC: return static::$loader; goto ieBs9; bOy82: if (static::$loader) { goto Bfbef; } goto WxRHd; TAyhm: Bfbef: goto gvGOC; WxRHd: static::$loader = (include base_path() . "\x2f\x76\145\x6e\144\157\162\57\x61\x75\164\x6f\x6c\x6f\141\x64\x2e\x70\150\160"); goto TAyhm; ieBs9: } public static function parse(?string $vDWeX) { return new ComposerProperty(static::fromJson($vDWeX)); } public static function getVersion(?string $owiH5, ?string $RzKuP = null) { goto NQdt2; h7EfU: return null; goto fgyIs; Xg6os: $RzKuP = $RzKuP ?: base_path("\x63\x6f\155\160\157\163\145\x72\x2e\154\157\143\x6b"); goto hwC_U; xUTSO: return $uv7SB["\x76\x65\x72\x73\x69\x6f\156"] ?? null; goto lKjH6; fgyIs: qe9BP: goto Xg6os; hwC_U: $uv7SB = collect(static::fromJson($RzKuP)["\160\x61\143\153\x61\147\145\x73"] ?? [])->filter(function ($eXCcR) use($owiH5) { return $eXCcR["\x6e\x61\155\x65"] == $owiH5; })->first(); goto xUTSO; NQdt2: if ($owiH5) { goto qe9BP; } goto h7EfU; lKjH6: } public static function fromJson(?string $vDWeX) { goto cDtUx; HIe3j: bnvVl: goto ldPo1; OPzYy: return static::$files[$vDWeX] = []; goto IsTpr; cDtUx: if (!isset(static::$files[$vDWeX])) { goto bnvVl; } goto QtlI2; ZsaDX: DDl4K: goto lHVZt; QtlI2: return static::$files[$vDWeX]; goto HIe3j; lHVZt: try { return static::$files[$vDWeX] = (array) json_decode(app("\x66\151\154\x65\163")->get($vDWeX), true); } catch (\Throwable $YZkjO) { } goto OPzYy; VrfV4: return static::$files[$vDWeX] = []; goto ZsaDX; ldPo1: if (!(!$vDWeX || !is_file($vDWeX))) { goto DDl4K; } goto VrfV4; IsTpr: } }
