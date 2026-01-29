<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto Jj02v; Q07BR: Sd4UP: goto eI6pj; eI6pj: return static::$loader; goto lk12b; rxfwF: static::$loader = (include base_path() . "\x2f\x76\x65\x6e\144\157\162\x2f\x61\x75\164\x6f\x6c\x6f\141\x64\x2e\160\x68\160"); goto Q07BR; Jj02v: if (static::$loader) { goto Sd4UP; } goto rxfwF; lk12b: } public static function parse(?string $geQcW) { return new ComposerProperty(static::fromJson($geQcW)); } public static function getVersion(?string $O4QKn, ?string $mdjIT = null) { goto rhNIM; ms4Di: return $qNQvi["\x76\145\x72\163\x69\157\x6e"] ?? null; goto piSLE; diZ2u: return null; goto INeig; YKfr8: $qNQvi = collect(static::fromJson($mdjIT)["\160\x61\143\153\141\147\145\163"] ?? [])->filter(function ($NXsnd) use($O4QKn) { return $NXsnd["\x6e\141\x6d\145"] == $O4QKn; })->first(); goto ms4Di; rhNIM: if ($O4QKn) { goto olZGr; } goto diZ2u; INeig: olZGr: goto cIeiz; cIeiz: $mdjIT = $mdjIT ?: base_path("\x63\157\155\x70\x6f\x73\x65\162\x2e\154\x6f\143\x6b"); goto YKfr8; piSLE: } public static function fromJson(?string $geQcW) { goto toQPb; vfDb7: return static::$files[$geQcW]; goto kXQsi; kXQsi: Svnsn: goto B5IHl; B5IHl: if (!(!$geQcW || !is_file($geQcW))) { goto mFVBs; } goto ztojG; nnZmT: try { return static::$files[$geQcW] = (array) json_decode(app("\x66\151\154\145\163")->get($geQcW), true); } catch (\Throwable $gRdcs) { } goto yVIfn; ztojG: return static::$files[$geQcW] = []; goto Umi9w; toQPb: if (!isset(static::$files[$geQcW])) { goto Svnsn; } goto vfDb7; yVIfn: return static::$files[$geQcW] = []; goto leL1e; Umi9w: mFVBs: goto nnZmT; leL1e: } }
