<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto vDT_x; HulFv: return static::$loader; goto YhTb6; mcsVq: static::$loader = (include base_path() . "\57\166\x65\x6e\144\157\x72\57\141\165\x74\157\x6c\x6f\141\144\56\x70\150\x70"); goto U_LlA; U_LlA: I5Obe: goto HulFv; vDT_x: if (static::$loader) { goto I5Obe; } goto mcsVq; YhTb6: } public static function parse(?string $X7GL0) { return new ComposerProperty(static::fromJson($X7GL0)); } public static function getVersion(?string $BM_03, ?string $QN3XL = null) { goto pUUc2; lKHB0: return $x69iG["\166\145\162\163\151\x6f\x6e"] ?? null; goto T6HsI; VuCus: $QN3XL = $QN3XL ?: base_path("\x63\157\x6d\160\x6f\163\x65\x72\56\x6c\157\x63\153"); goto AKsw9; q1juM: sfCvG: goto VuCus; AKsw9: $x69iG = collect(static::fromJson($QN3XL)["\x70\x61\143\153\x61\x67\145\x73"] ?? [])->filter(function ($U5YWC) use($BM_03) { return $U5YWC["\156\141\x6d\x65"] == $BM_03; })->first(); goto lKHB0; pUUc2: if ($BM_03) { goto sfCvG; } goto J7CP9; J7CP9: return null; goto q1juM; T6HsI: } public static function fromJson(?string $X7GL0) { goto VVlOX; BWFVK: qREcy: goto jroyv; U70Yk: try { return static::$files[$X7GL0] = (array) json_decode(app("\x66\x69\154\x65\163")->get($X7GL0), true); } catch (\Throwable $eRCcN) { } goto cli5S; uddjS: return static::$files[$X7GL0]; goto BWFVK; jroyv: if (!(!$X7GL0 || !is_file($X7GL0))) { goto CynRc; } goto cd250; cd250: return static::$files[$X7GL0] = []; goto Ydaz9; Ydaz9: CynRc: goto U70Yk; cli5S: return static::$files[$X7GL0] = []; goto W8T64; VVlOX: if (!isset(static::$files[$X7GL0])) { goto qREcy; } goto uddjS; W8T64: } }
