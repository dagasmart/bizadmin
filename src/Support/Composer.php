<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto hVUA8; lnyfq: static::$loader = (include base_path() . "\57\x76\145\156\144\x6f\162\57\x61\165\164\x6f\x6c\157\141\x64\56\160\150\160"); goto E7r8b; E7r8b: rnxei: goto ETWde; hVUA8: if (static::$loader) { goto rnxei; } goto lnyfq; ETWde: return static::$loader; goto EdmgC; EdmgC: } public static function parse(?string $prUsj) { return new ComposerProperty(static::fromJson($prUsj)); } public static function getVersion(?string $UDQ7y, ?string $k3EXW = null) { goto ZVcal; ZVcal: if ($UDQ7y) { goto mUNxd; } goto VsNWL; rwg9g: $eLBqe = collect(static::fromJson($k3EXW)["\x70\141\143\153\141\147\145\163"] ?? [])->filter(function ($gp6i6) use($UDQ7y) { return $gp6i6["\x6e\x61\155\x65"] == $UDQ7y; })->first(); goto XNOzR; KPJLc: $k3EXW = $k3EXW ?: base_path("\x63\x6f\x6d\x70\157\x73\145\x72\x2e\x6c\x6f\143\153"); goto rwg9g; XNOzR: return $eLBqe["\x76\145\x72\163\151\x6f\x6e"] ?? null; goto KrAJ5; JM0Fm: mUNxd: goto KPJLc; VsNWL: return null; goto JM0Fm; KrAJ5: } public static function fromJson(?string $prUsj) { goto S4997; y9ZEH: kMaIV: goto dj7GV; JFVOg: try { return static::$files[$prUsj] = (array) json_decode(app("\x66\151\154\x65\163")->get($prUsj), true); } catch (\Throwable $AwPkn) { } goto dOAUQ; dj7GV: if (!(!$prUsj || !is_file($prUsj))) { goto z3oHv; } goto mQtql; dOAUQ: return static::$files[$prUsj] = []; goto W7wOi; S4997: if (!isset(static::$files[$prUsj])) { goto kMaIV; } goto ukpu4; pF0SZ: z3oHv: goto JFVOg; mQtql: return static::$files[$prUsj] = []; goto pF0SZ; ukpu4: return static::$files[$prUsj]; goto y9ZEH; W7wOi: } }
