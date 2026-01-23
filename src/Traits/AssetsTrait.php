<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait AssetsTrait { public static function asset() { return app("\141\x64\155\151\x6e\x2e\141\x73\x73\x65\164"); } public static function js($YHxWR = null) { return static::asset()->js($YHxWR); } public static function css($y11Py = null) { return static::asset()->css($y11Py); } public static function scripts($nXOYn = null) { return static::asset()->scripts($nXOYn); } public static function styles($K2g1_ = null) { return static::asset()->styles($K2g1_); } public static function getAssets() { return ["\x6a\x73" => static::asset()->js(), "\143\x73\x73" => static::asset()->css(), "\x73\143\162\x69\x70\x74\x73" => static::asset()->scripts(), "\163\164\171\x6c\x65\163" => static::asset()->styles()]; } public static function appendNav($n0aUh = null) { return static::asset()->appendNav($n0aUh); } public static function prependNav($P4uT9 = null) { return static::asset()->prependNav($P4uT9); } public static function getNav() { return ["\141\x70\x70\145\x6e\x64\x4e\141\166" => static::asset()->appendNav(), "\x70\162\145\160\145\156\x64\116\141\166" => static::asset()->prependNav()]; } }
