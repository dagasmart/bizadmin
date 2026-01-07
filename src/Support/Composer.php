<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto oGIbt; oGIbt: if (static::$loader) { goto aROHE; } goto CSPv1; WUA0r: return static::$loader; goto mCJI4; ayMCV: aROHE: goto WUA0r; CSPv1: static::$loader = (include base_path() . "\57\x76\145\x6e\x64\157\162\x2f\141\x75\164\157\x6c\157\x61\x64\56\160\x68\x70"); goto ayMCV; mCJI4: } public static function parse(?string $zlKvU) { return new ComposerProperty(static::fromJson($zlKvU)); } public static function getVersion(?string $zXdZs, ?string $B87TY = null) { goto uMoKu; AL0u_: $jVKxU = collect(static::fromJson($B87TY)["\160\x61\x63\153\x61\147\x65\x73"] ?? [])->filter(function ($w0aoq) use($zXdZs) { return $w0aoq["\x6e\141\155\x65"] == $zXdZs; })->first(); goto eavby; R5XRE: return null; goto Ap2xX; Ap2xX: DN89J: goto zyB1Q; zyB1Q: $B87TY = $B87TY ?: base_path("\143\x6f\x6d\160\x6f\x73\145\162\56\x6c\x6f\143\x6b"); goto AL0u_; uMoKu: if ($zXdZs) { goto DN89J; } goto R5XRE; eavby: return $jVKxU["\166\x65\162\x73\151\x6f\x6e"] ?? null; goto LtZwr; LtZwr: } public static function fromJson(?string $zlKvU) { goto JpacC; TrLJF: return static::$files[$zlKvU] = []; goto yVhEI; PAVon: return static::$files[$zlKvU] = []; goto W67lX; cSUWx: return static::$files[$zlKvU]; goto c42Lf; tN7Ju: try { return static::$files[$zlKvU] = (array) json_decode(app("\x66\151\x6c\145\163")->get($zlKvU), true); } catch (\Throwable $Z3JTx) { } goto PAVon; JpacC: if (!isset(static::$files[$zlKvU])) { goto FDxU1; } goto cSUWx; c42Lf: FDxU1: goto Zgi4a; Zgi4a: if (!(!$zlKvU || !is_file($zlKvU))) { goto s8JDU; } goto TrLJF; yVhEI: s8JDU: goto tN7Ju; W67lX: } }
