<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto hECr1; hECr1: if (static::$loader) { goto Z_HSo; } goto p4Zmd; Dv0pK: return static::$loader; goto Yo_3Q; p4Zmd: static::$loader = (include base_path() . "\x2f\166\145\x6e\x64\x6f\162\57\141\165\x74\x6f\x6c\157\x61\144\56\x70\150\x70"); goto PFRE6; PFRE6: Z_HSo: goto Dv0pK; Yo_3Q: } public static function parse(?string $wSKpS) { return new ComposerProperty(static::fromJson($wSKpS)); } public static function getVersion(?string $EAkej, ?string $IFQt6 = null) { goto pP_fa; qChBx: $IFQt6 = $IFQt6 ?: base_path("\x63\157\155\160\157\163\x65\x72\56\154\157\x63\x6b"); goto gEZk3; S0uGe: return null; goto OlkAa; pP_fa: if ($EAkej) { goto stXZV; } goto S0uGe; OlkAa: stXZV: goto qChBx; aBCEG: return $chHm9["\166\145\x72\163\x69\157\x6e"] ?? null; goto SKFES; gEZk3: $chHm9 = collect(static::fromJson($IFQt6)["\160\x61\143\153\141\147\x65\163"] ?? [])->filter(function ($msRQo) use($EAkej) { return $msRQo["\x6e\141\155\x65"] == $EAkej; })->first(); goto aBCEG; SKFES: } public static function fromJson(?string $wSKpS) { goto UK2o9; fccsG: tQsI9: goto rudoy; UK2o9: if (!isset(static::$files[$wSKpS])) { goto l8cor; } goto MFPj4; PDbVk: l8cor: goto za7Wa; za7Wa: if (!(!$wSKpS || !is_file($wSKpS))) { goto tQsI9; } goto WFg10; rudoy: try { return static::$files[$wSKpS] = (array) json_decode(app("\146\x69\x6c\145\x73")->get($wSKpS), true); } catch (\Throwable $gisIz) { } goto cv3V2; cv3V2: return static::$files[$wSKpS] = []; goto FJTJH; WFg10: return static::$files[$wSKpS] = []; goto fccsG; MFPj4: return static::$files[$wSKpS]; goto PDbVk; FJTJH: } }
