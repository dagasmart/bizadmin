<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto I40iI; JZtNs: pyM82: goto Wpfjj; PUPCc: static::$loader = (include base_path() . "\x2f\x76\145\156\x64\x6f\x72\x2f\x61\165\164\x6f\154\157\141\144\x2e\160\x68\x70"); goto JZtNs; I40iI: if (static::$loader) { goto pyM82; } goto PUPCc; Wpfjj: return static::$loader; goto yGvyJ; yGvyJ: } public static function parse(?string $ALS2w) { return new ComposerProperty(static::fromJson($ALS2w)); } public static function getVersion(?string $GyojM, ?string $qJU68 = null) { goto Pkft3; UJOtl: $qJU68 = $qJU68 ?: base_path("\143\x6f\x6d\x70\x6f\x73\145\x72\56\154\157\143\x6b"); goto UPUoo; Pkft3: if ($GyojM) { goto zio1P; } goto DpbJC; DpbJC: return null; goto cDqzL; UPUoo: $f9aYj = collect(static::fromJson($qJU68)["\160\x61\143\153\x61\147\145\163"] ?? [])->filter(function ($AHvXX) use($GyojM) { return $AHvXX["\156\x61\x6d\145"] == $GyojM; })->first(); goto Uiixz; Uiixz: return $f9aYj["\166\145\162\163\x69\157\x6e"] ?? null; goto ICg4S; cDqzL: zio1P: goto UJOtl; ICg4S: } public static function fromJson(?string $ALS2w) { goto KF8BP; SqeOb: return static::$files[$ALS2w]; goto aEDU8; KF8BP: if (!isset(static::$files[$ALS2w])) { goto uJuX3; } goto SqeOb; rQ4ID: try { return static::$files[$ALS2w] = (array) json_decode(app("\146\x69\x6c\x65\163")->get($ALS2w), true); } catch (\Throwable $N4FzU) { } goto weN7j; ch71x: return static::$files[$ALS2w] = []; goto hqXnI; aEDU8: uJuX3: goto NMcOI; weN7j: return static::$files[$ALS2w] = []; goto l7A_Q; hqXnI: ovpV9: goto rQ4ID; NMcOI: if (!(!$ALS2w || !is_file($ALS2w))) { goto ovpV9; } goto ch71x; l7A_Q: } }
