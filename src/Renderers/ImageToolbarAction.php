<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:31              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Renderers; class ImageToolbarAction extends BaseRenderer { public function __construct() { $this->set("\153\145\171", "\x52\117\124\x41\124\105\x5f\122\111\x47\110\124"); } public function confirmTitle($b5EKT = '') { return $this->set("\143\x6f\156\146\x69\x72\155\124\x69\164\x6c\145", $b5EKT); } public function disabled($b5EKT = true) { return $this->set("\144\x69\163\141\x62\154\145\144", $b5EKT); } public function icon($b5EKT = '') { return $this->set("\151\143\x6f\x6e", $b5EKT); } public function iconClassName($b5EKT = '') { return $this->set("\x69\x63\157\x6e\103\154\141\163\x73\x4e\141\x6d\x65", $b5EKT); } public function key($b5EKT = '') { return $this->set("\x6b\x65\x79", $b5EKT); } public function label($b5EKT = '') { return $this->set("\x6c\141\142\145\x6c", $b5EKT); } }
