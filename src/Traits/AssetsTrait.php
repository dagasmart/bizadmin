<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait AssetsTrait { public static function asset() { return app("\x61\144\155\x69\156\56\141\163\x73\145\164"); } public static function js($KlqV4 = null) { return static::asset()->js($KlqV4); } public static function css($fuJfl = null) { return static::asset()->css($fuJfl); } public static function scripts($c50PM = null) { return static::asset()->scripts($c50PM); } public static function styles($ryjpp = null) { return static::asset()->styles($ryjpp); } public static function getAssets() { return ["\x6a\x73" => static::asset()->js(), "\x63\163\x73" => static::asset()->css(), "\163\x63\x72\151\160\164\x73" => static::asset()->scripts(), "\163\x74\171\x6c\x65\163" => static::asset()->styles()]; } public static function appendNav($gsioJ = null) { return static::asset()->appendNav($gsioJ); } public static function prependNav($avZCo = null) { return static::asset()->prependNav($avZCo); } public static function getNav() { return ["\x61\x70\160\x65\x6e\144\x4e\141\166" => static::asset()->appendNav(), "\160\162\145\x70\x65\156\x64\116\141\166" => static::asset()->prependNav()]; } }
