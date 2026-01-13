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
 namespace DagaSmart\BizAdmin\Traits; trait AssetsTrait { public static function asset() { return app("\x61\144\x6d\151\x6e\56\x61\163\163\145\x74"); } public static function js($NmLSu = null) { return static::asset()->js($NmLSu); } public static function css($CA_cU = null) { return static::asset()->css($CA_cU); } public static function scripts($ud0q0 = null) { return static::asset()->scripts($ud0q0); } public static function styles($scxjy = null) { return static::asset()->styles($scxjy); } public static function getAssets() { return ["\x6a\x73" => static::asset()->js(), "\x63\x73\163" => static::asset()->css(), "\x73\143\x72\x69\160\164\x73" => static::asset()->scripts(), "\163\x74\171\154\x65\163" => static::asset()->styles()]; } public static function appendNav($Q2Mmj = null) { return static::asset()->appendNav($Q2Mmj); } public static function prependNav($s4YUJ = null) { return static::asset()->prependNav($s4YUJ); } public static function getNav() { return ["\x61\x70\x70\145\156\144\116\141\166" => static::asset()->appendNav(), "\x70\x72\145\160\x65\156\x64\116\x61\166" => static::asset()->prependNav()]; } }
