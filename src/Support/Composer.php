<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:49              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto FL32f; FL32f: if (static::$loader) { goto BYwYi; } goto F3oD0; F3oD0: static::$loader = (include base_path() . "\x2f\166\x65\x6e\144\x6f\x72\57\x61\x75\164\x6f\154\157\x61\x64\56\160\x68\160"); goto cTo1z; cTo1z: BYwYi: goto JXJkI; JXJkI: return static::$loader; goto q3fWo; q3fWo: } public static function parse(?string $e01IC) { return new ComposerProperty(static::fromJson($e01IC)); } public static function getVersion(?string $U2yd0, ?string $tahdV = null) { goto QqNby; QqNby: if ($U2yd0) { goto m31uh; } goto dO5De; dO5De: return null; goto piUug; piUug: m31uh: goto MRWvF; P2bxW: $RljVm = collect(static::fromJson($tahdV)["\160\x61\x63\x6b\x61\147\145\x73"] ?? [])->filter(function ($JqsAq) use($U2yd0) { return $JqsAq["\x6e\141\x6d\x65"] == $U2yd0; })->first(); goto aW9J0; aW9J0: return $RljVm["\166\x65\x72\x73\151\157\156"] ?? null; goto MIxJj; MRWvF: $tahdV = $tahdV ?: base_path("\x63\157\155\160\x6f\163\x65\162\56\154\x6f\x63\x6b"); goto P2bxW; MIxJj: } public static function fromJson(?string $e01IC) { goto vtFgU; YO8gT: if (!(!$e01IC || !is_file($e01IC))) { goto fD3M6; } goto Pj1LN; TdiQ7: return static::$files[$e01IC] = []; goto bFyzN; Fk8xg: fD3M6: goto osphj; osphj: try { return static::$files[$e01IC] = (array) json_decode(app("\146\151\x6c\145\x73")->get($e01IC), true); } catch (\Throwable $nEc3H) { } goto TdiQ7; URL9Z: return static::$files[$e01IC]; goto h2Ke0; Pj1LN: return static::$files[$e01IC] = []; goto Fk8xg; vtFgU: if (!isset(static::$files[$e01IC])) { goto cadTQ; } goto URL9Z; h2Ke0: cadTQ: goto YO8gT; bFyzN: } }
