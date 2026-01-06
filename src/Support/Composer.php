<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto nCtSm; SNbFX: fogLj: goto r6qPV; nCtSm: if (static::$loader) { goto fogLj; } goto zdZ5l; r6qPV: return static::$loader; goto Ijx6M; zdZ5l: static::$loader = (include base_path() . "\57\166\x65\x6e\144\x6f\162\x2f\141\165\x74\x6f\154\157\141\x64\56\160\150\160"); goto SNbFX; Ijx6M: } public static function parse(?string $KFu_V) { return new ComposerProperty(static::fromJson($KFu_V)); } public static function getVersion(?string $auXfB, ?string $aDBoJ = null) { goto F1e6d; PnuRI: return null; goto HRU86; F1e6d: if ($auXfB) { goto UX8P4; } goto PnuRI; HRU86: UX8P4: goto gjvCc; gjvCc: $aDBoJ = $aDBoJ ?: base_path("\x63\157\155\160\157\163\x65\x72\56\154\x6f\143\153"); goto bLczi; Uvejg: return $m6KUY["\166\x65\x72\163\151\x6f\156"] ?? null; goto zWUG4; bLczi: $m6KUY = collect(static::fromJson($aDBoJ)["\x70\x61\x63\x6b\141\x67\x65\x73"] ?? [])->filter(function ($nMamD) use($auXfB) { return $nMamD["\x6e\141\155\145"] == $auXfB; })->first(); goto Uvejg; zWUG4: } public static function fromJson(?string $KFu_V) { goto dSZPj; Ytmog: if (!(!$KFu_V || !is_file($KFu_V))) { goto WPhtA; } goto w3TZS; XmjFG: try { return static::$files[$KFu_V] = (array) json_decode(app("\x66\x69\154\145\x73")->get($KFu_V), true); } catch (\Throwable $nVtgT) { } goto cepRu; dSZPj: if (!isset(static::$files[$KFu_V])) { goto JF_vo; } goto AQJWK; ZnC0E: WPhtA: goto XmjFG; cepRu: return static::$files[$KFu_V] = []; goto yuQu3; AQJWK: return static::$files[$KFu_V]; goto r5WXZ; r5WXZ: JF_vo: goto Ytmog; w3TZS: return static::$files[$KFu_V] = []; goto ZnC0E; yuQu3: } }
