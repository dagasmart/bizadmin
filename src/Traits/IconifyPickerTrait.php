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
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $GkRP7 = '', string $m9Dk1 = '') { $RPFsb = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\157\x6c\165\x6d\156\163\x43\157\165\x6e\164", 6)->footerToolbar(["\x73\164\x61\164\x69\x73\x74\x69\143\x73", "\160\141\147\x69\x6e\x61\x74\x69\x6f\x6e"])->api("\x2f\x5f\151\x63\x6f\156\x69\x66\171\x5f\x73\145\141\x72\x63\x68")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\160\x74\x2d\63\x20\x70\x62\55\x33")->body([amis()->TextControl("\161\165\145\162\171")->size("\155\144")->value("\44\173" . $GkRP7 . "\40\174\x7c\x20\x22\150\157\x6d\x65\42\x7d")->clearable()->required(), amis()->Button()->label(admin_trans("\x61\144\155\151\156\56\x73\145\141\162\143\x68"))->level("\x70\162\151\155\x61\162\171")->actionType("\x73\165\x62\155\151\164")->icon("\x66\x61\x20\146\x61\x2d\x73\145\141\x72\x63\150"), amis()->UrlAction()->className("\x6d\154\55\x32")->icon("\x66\141\x20\146\141\x2d\x65\170\x74\145\162\156\141\x6c\x2d\x6c\x69\156\x6b\x2d\141\x6c\x74")->label("\x49\x63\157\156\x65\x73")->blank()->url("\150\x74\164\x70\163\x3a\x2f\57\x69\x63\x6f\156\145\x73\56\152\163\56\x6f\162\147\57\x63\x6f\x6c\x6c\145\x63\164\x69\x6f\156\x2f\x61\x6c\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\173\x69\x63\157\x6e\x7d")->className("\164\145\170\x74\x2d\64\x78\154")])); return amis()->PickerControl($GkRP7, $m9Dk1)->pickerSchema($RPFsb)->modalSize("\154\147")->source("\57\137\151\143\157\x6e\x69\x66\x79\137\163\x65\x61\x72\143\x68")->labelField("\x69\x63\157\156")->valueField("\x69\x63\157\156"); } }
