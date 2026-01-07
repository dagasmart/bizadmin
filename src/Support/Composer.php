<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:07              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto Jtzzn; cUOM3: static::$loader = (include base_path() . "\57\166\x65\x6e\x64\x6f\162\x2f\x61\x75\x74\157\154\x6f\x61\144\x2e\x70\x68\x70"); goto M5Rh2; M5Rh2: RwMk6: goto Q5kTi; Jtzzn: if (static::$loader) { goto RwMk6; } goto cUOM3; Q5kTi: return static::$loader; goto gtHOO; gtHOO: } public static function parse(?string $zz5OM) { return new ComposerProperty(static::fromJson($zz5OM)); } public static function getVersion(?string $dJQAl, ?string $OSR9w = null) { goto VIkgG; Pyc48: $OSR9w = $OSR9w ?: base_path("\x63\157\155\160\x6f\163\145\x72\56\x6c\157\x63\153"); goto TjZqa; VIkgG: if ($dJQAl) { goto upXRI; } goto nDhRR; jw26u: upXRI: goto Pyc48; nDhRR: return null; goto jw26u; rrDSO: return $Nimpz["\x76\145\x72\x73\x69\x6f\156"] ?? null; goto GAXI8; TjZqa: $Nimpz = collect(static::fromJson($OSR9w)["\160\x61\x63\153\141\x67\x65\163"] ?? [])->filter(function ($wMm3m) use($dJQAl) { return $wMm3m["\156\141\155\x65"] == $dJQAl; })->first(); goto rrDSO; GAXI8: } public static function fromJson(?string $zz5OM) { goto btKhY; SJPMJ: try { return static::$files[$zz5OM] = (array) json_decode(app("\x66\x69\x6c\x65\163")->get($zz5OM), true); } catch (\Throwable $QsWct) { } goto ldsT4; nMzsi: return static::$files[$zz5OM] = []; goto qzT34; IOBCL: return static::$files[$zz5OM]; goto Ixb1y; ldsT4: return static::$files[$zz5OM] = []; goto cIlFY; Ixb1y: t_But: goto k56ep; btKhY: if (!isset(static::$files[$zz5OM])) { goto t_But; } goto IOBCL; k56ep: if (!(!$zz5OM || !is_file($zz5OM))) { goto ci67r; } goto nMzsi; qzT34: ci67r: goto SJPMJ; cIlFY: } }
