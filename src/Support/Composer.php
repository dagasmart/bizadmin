<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:00              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support; use Composer\Autoload\ClassLoader; class Composer { protected static array $files = []; protected static $loader; public static function loader() { goto akjER; TsLSZ: return static::$loader; goto lPLG7; d5X_K: eCOrl: goto TsLSZ; Bhwz4: static::$loader = (include base_path() . "\57\166\x65\156\x64\x6f\162\x2f\x61\x75\x74\157\x6c\x6f\141\144\x2e\x70\150\x70"); goto d5X_K; akjER: if (static::$loader) { goto eCOrl; } goto Bhwz4; lPLG7: } public static function parse(?string $doLfm) { return new ComposerProperty(static::fromJson($doLfm)); } public static function getVersion(?string $NfQHe, ?string $aHf8I = null) { goto NeqPG; NeqPG: if ($NfQHe) { goto YRlqY; } goto bc0sO; mfkE9: $SZ_kQ = collect(static::fromJson($aHf8I)["\160\x61\143\x6b\141\x67\x65\x73"] ?? [])->filter(function ($PBVs1) use($NfQHe) { return $PBVs1["\156\x61\155\145"] == $NfQHe; })->first(); goto EDaBh; bc0sO: return null; goto lqaHC; c6FhC: $aHf8I = $aHf8I ?: base_path("\x63\x6f\155\160\157\163\145\x72\56\154\157\x63\x6b"); goto mfkE9; EDaBh: return $SZ_kQ["\x76\145\162\x73\151\x6f\156"] ?? null; goto Wkzro; lqaHC: YRlqY: goto c6FhC; Wkzro: } public static function fromJson(?string $doLfm) { goto K8rtJ; SKFAM: return static::$files[$doLfm] = []; goto hFula; qkQQo: return static::$files[$doLfm]; goto frdTV; cYNH2: if (!(!$doLfm || !is_file($doLfm))) { goto NDADe; } goto SKFAM; frdTV: A3i11: goto cYNH2; YaG7i: try { return static::$files[$doLfm] = (array) json_decode(app("\x66\x69\154\145\x73")->get($doLfm), true); } catch (\Throwable $I2kMx) { } goto C3iab; C3iab: return static::$files[$doLfm] = []; goto OmqJN; K8rtJ: if (!isset(static::$files[$doLfm])) { goto A3i11; } goto qkQQo; hFula: NDADe: goto YaG7i; OmqJN: } }
