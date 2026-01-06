<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait AssetsTrait { public static function asset() { return app("\141\x64\155\151\x6e\x2e\x61\x73\163\145\x74"); } public static function js($Tlosz = null) { return static::asset()->js($Tlosz); } public static function css($gN6ze = null) { return static::asset()->css($gN6ze); } public static function scripts($Y20ID = null) { return static::asset()->scripts($Y20ID); } public static function styles($Uki0z = null) { return static::asset()->styles($Uki0z); } public static function getAssets() { return ["\x6a\x73" => static::asset()->js(), "\x63\163\163" => static::asset()->css(), "\163\143\x72\x69\160\x74\163" => static::asset()->scripts(), "\163\164\171\x6c\x65\163" => static::asset()->styles()]; } public static function appendNav($YPPtP = null) { return static::asset()->appendNav($YPPtP); } public static function prependNav($PA1ne = null) { return static::asset()->prependNav($PA1ne); } public static function getNav() { return ["\x61\x70\x70\x65\x6e\144\116\141\166" => static::asset()->appendNav(), "\x70\162\145\160\145\x6e\144\116\141\x76" => static::asset()->prependNav()]; } }
