<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait AssetsTrait { public static function asset() { return app("\x61\x64\x6d\x69\156\x2e\141\x73\163\x65\x74"); } public static function js($vJmt0 = null) { return static::asset()->js($vJmt0); } public static function css($QAmtq = null) { return static::asset()->css($QAmtq); } public static function scripts($Q2lmv = null) { return static::asset()->scripts($Q2lmv); } public static function styles($dfBp1 = null) { return static::asset()->styles($dfBp1); } public static function getAssets() { return ["\152\x73" => static::asset()->js(), "\143\x73\x73" => static::asset()->css(), "\163\143\162\151\160\164\163" => static::asset()->scripts(), "\163\x74\x79\154\x65\163" => static::asset()->styles()]; } public static function appendNav($dhLP1 = null) { return static::asset()->appendNav($dhLP1); } public static function prependNav($bk6hO = null) { return static::asset()->prependNav($bk6hO); } public static function getNav() { return ["\x61\x70\160\x65\156\144\116\141\x76" => static::asset()->appendNav(), "\160\x72\145\160\x65\x6e\x64\116\x61\x76" => static::asset()->prependNav()]; } }
