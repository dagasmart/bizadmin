<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-31 20:20:08              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $jT6f0 = '', string $HOGJZ = '') { $nHPQB = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\157\x6c\165\155\x6e\163\x43\x6f\x75\156\164", 6)->footerToolbar(["\163\x74\x61\x74\x69\x73\164\151\143\x73", "\160\141\147\151\156\141\164\151\157\x6e"])->api("\57\x5f\x69\143\157\x6e\x69\146\x79\137\x73\x65\x61\x72\143\x68")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\164\55\63\x20\160\x62\x2d\63")->body([amis()->TextControl("\161\x75\x65\x72\x79")->size("\155\144")->value("\x24\173" . $jT6f0 . "\40\174\x7c\40\x22\150\x6f\x6d\x65\42\x7d")->clearable()->required(), amis()->Button()->label(admin_trans("\141\x64\155\151\x6e\x2e\x73\x65\141\162\x63\x68"))->level("\160\x72\151\x6d\141\162\x79")->actionType("\x73\x75\142\155\151\164")->icon("\146\141\40\x66\x61\55\x73\x65\x61\x72\143\150"), amis()->UrlAction()->className("\x6d\154\x2d\62")->icon("\x66\141\40\x66\141\x2d\145\x78\x74\x65\162\156\141\x6c\x2d\154\x69\156\153\x2d\141\154\x74")->label("\111\143\157\x6e\x65\163")->blank()->url("\x68\x74\164\x70\163\x3a\x2f\x2f\151\x63\x6f\x6e\x65\163\56\152\x73\x2e\157\162\147\x2f\x63\157\154\154\x65\143\164\151\157\156\x2f\x61\x6c\x6c")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\x24\x7b\151\143\157\156\x7d")->className("\x74\145\170\x74\x2d\64\170\154")])); return amis()->PickerControl($jT6f0, $HOGJZ)->pickerSchema($nHPQB)->modalSize("\154\x67")->source("\x2f\x5f\151\143\157\156\x69\146\171\137\x73\145\141\x72\143\150")->labelField("\x69\143\x6f\156")->valueField("\151\143\x6f\x6e"); } }
