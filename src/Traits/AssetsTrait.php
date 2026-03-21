<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait AssetsTrait { public static function asset() { return app("\x61\x64\x6d\151\x6e\56\x61\x73\163\x65\164"); } public static function js($smbSw = null) { return static::asset()->js($smbSw); } public static function css($yMjlh = null) { return static::asset()->css($yMjlh); } public static function scripts($x7MRT = null) { return static::asset()->scripts($x7MRT); } public static function styles($AJpng = null) { return static::asset()->styles($AJpng); } public static function getAssets() { return ["\x6a\163" => static::asset()->js(), "\143\x73\163" => static::asset()->css(), "\163\x63\x72\x69\x70\164\163" => static::asset()->scripts(), "\163\x74\171\x6c\x65\163" => static::asset()->styles()]; } public static function appendNav($tyaun = null) { return static::asset()->appendNav($tyaun); } public static function prependNav($xi3f0 = null) { return static::asset()->prependNav($xi3f0); } public static function getNav() { return ["\141\160\160\145\156\x64\x4e\x61\x76" => static::asset()->appendNav(), "\160\162\145\x70\145\156\144\116\141\166" => static::asset()->prependNav()]; } }
