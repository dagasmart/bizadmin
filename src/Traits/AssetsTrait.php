<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait AssetsTrait { public static function asset() { return app("\141\x64\155\x69\x6e\56\141\x73\x73\x65\164"); } public static function js($vJmt0 = null) { return static::asset()->js($vJmt0); } public static function css($QAmtq = null) { return static::asset()->css($QAmtq); } public static function scripts($Q2lmv = null) { return static::asset()->scripts($Q2lmv); } public static function styles($dfBp1 = null) { return static::asset()->styles($dfBp1); } public static function getAssets() { return ["\152\x73" => static::asset()->js(), "\x63\163\163" => static::asset()->css(), "\163\x63\x72\151\160\x74\x73" => static::asset()->scripts(), "\x73\164\x79\x6c\145\x73" => static::asset()->styles()]; } public static function appendNav($dhLP1 = null) { return static::asset()->appendNav($dhLP1); } public static function prependNav($bk6hO = null) { return static::asset()->prependNav($bk6hO); } public static function getNav() { return ["\141\x70\160\x65\156\x64\116\141\166" => static::asset()->appendNav(), "\x70\162\x65\160\x65\156\144\116\141\x76" => static::asset()->prependNav()]; } }
