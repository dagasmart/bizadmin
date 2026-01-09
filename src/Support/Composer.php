<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto pDLNB; Wv16n: static::$loader = (include base_path() . "\x2f\166\145\x6e\144\157\x72\x2f\141\x75\x74\x6f\x6c\157\141\144\x2e\160\150\x70"); goto mbgch; pDLNB: if (static::$loader) { goto DmFOy; } goto Wv16n; mbgch: DmFOy: goto LsLoz; LsLoz: return static::$loader; goto C2PQ8; C2PQ8: } public static function parse(?string $Sv1lc) { return new ComposerProperty(static::fromJson($Sv1lc)); } public static function getVersion(?string $PSvKm, ?string $buMin = null) { goto h6xfs; qFKdf: $iR508 = collect(static::fromJson($buMin)["\160\141\143\153\141\147\x65\x73"] ?? [])->filter(function ($HXweU) use($PSvKm) { return $HXweU["\x6e\141\x6d\x65"] == $PSvKm; })->first(); goto KcBwC; h6xfs: if ($PSvKm) { goto pWcdl; } goto rEM7O; KcBwC: return $iR508["\x76\145\x72\163\x69\x6f\x6e"] ?? null; goto jQOfg; rEM7O: return null; goto yl22f; UMWD3: $buMin = $buMin ?: base_path("\143\157\x6d\160\157\x73\145\162\x2e\x6c\157\x63\153"); goto qFKdf; yl22f: pWcdl: goto UMWD3; jQOfg: } public static function fromJson(?string $Sv1lc) { goto jJ9XF; nT0Uu: try { return static::$files[$Sv1lc] = (array) json_decode(app("\146\x69\154\x65\x73")->get($Sv1lc), true); } catch (\Throwable $ORAT3) { } goto RjCpm; oMsXi: if (!(!$Sv1lc || !is_file($Sv1lc))) { goto xxzO3; } goto lC61l; s14i7: xR7PB: goto oMsXi; V3jvB: xxzO3: goto nT0Uu; lC61l: return static::$files[$Sv1lc] = []; goto V3jvB; jJ9XF: if (!isset(static::$files[$Sv1lc])) { goto xR7PB; } goto J1Kz9; RjCpm: return static::$files[$Sv1lc] = []; goto cszyy; J1Kz9: return static::$files[$Sv1lc]; goto s14i7; cszyy: } }
