<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait AssetsTrait { public static function asset() { return app("\x61\x64\155\x69\156\x2e\141\x73\163\145\x74"); } public static function js($EfSl1 = null) { return static::asset()->js($EfSl1); } public static function css($C_HJ0 = null) { return static::asset()->css($C_HJ0); } public static function scripts($sEU1_ = null) { return static::asset()->scripts($sEU1_); } public static function styles($dILf9 = null) { return static::asset()->styles($dILf9); } public static function getAssets() { return ["\x6a\x73" => static::asset()->js(), "\x63\x73\x73" => static::asset()->css(), "\x73\143\x72\x69\160\x74\x73" => static::asset()->scripts(), "\163\x74\171\154\x65\x73" => static::asset()->styles()]; } public static function appendNav($jZz_V = null) { return static::asset()->appendNav($jZz_V); } public static function prependNav($fo5cp = null) { return static::asset()->prependNav($fo5cp); } public static function getNav() { return ["\141\160\x70\x65\x6e\144\116\x61\166" => static::asset()->appendNav(), "\160\162\145\160\x65\156\144\x4e\141\166" => static::asset()->prependNav()]; } }
