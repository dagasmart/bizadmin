<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class Option extends BaseRenderer { public function __construct() { } public function children($PfrF0 = '') { return $this->set("\x63\x68\x69\x6c\x64\162\x65\x6e", $PfrF0); } public function defer($PfrF0 = true) { return $this->set("\x64\x65\146\x65\x72", $PfrF0); } public function deferApi($PfrF0 = '') { return $this->set("\144\145\146\145\x72\101\x70\151", $PfrF0); } public function description($PfrF0 = '') { return $this->set("\x64\145\163\x63\162\151\x70\164\151\x6f\156", $PfrF0); } public function disabled($PfrF0 = true) { return $this->set("\144\151\163\141\x62\154\x65\144", $PfrF0); } public function hidden($PfrF0 = true) { return $this->set("\x68\x69\144\x64\x65\156", $PfrF0); } public function label($PfrF0 = '') { return $this->set("\154\141\x62\145\154", $PfrF0); } public function loaded($PfrF0 = true) { return $this->set("\x6c\x6f\141\x64\145\144", $PfrF0); } public function loading($PfrF0 = true) { return $this->set("\x6c\x6f\x61\x64\151\x6e\x67", $PfrF0); } public function scopeLabel($PfrF0 = '') { return $this->set("\x73\143\157\160\x65\x4c\141\142\x65\x6c", $PfrF0); } public function value($PfrF0 = '') { return $this->set("\x76\141\154\x75\x65", $PfrF0); } public function visible($PfrF0 = true) { return $this->set("\166\x69\x73\151\142\x6c\x65", $PfrF0); } }
