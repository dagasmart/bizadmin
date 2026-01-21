<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:39              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $Pk2Xe = '', string $Qho6y = '') { $a1A5G = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\x6f\x6c\165\x6d\156\163\x43\157\x75\156\164", 6)->footerToolbar(["\163\164\x61\164\x69\x73\x74\151\143\x73", "\x70\x61\147\x69\x6e\x61\164\151\157\x6e"])->api("\x2f\137\151\143\x6f\156\x69\146\171\x5f\x73\145\x61\162\x63\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\164\55\x33\40\x70\x62\55\x33")->body([amis()->TextControl("\x71\x75\x65\x72\171")->size("\x6d\x64")->value("\44\173" . $Pk2Xe . "\x20\174\x7c\40\42\150\157\x6d\145\42\175")->clearable()->required(), amis()->Button()->label(admin_trans("\141\144\x6d\151\156\x2e\163\x65\x61\162\x63\x68"))->level("\160\162\x69\155\x61\x72\171")->actionType("\163\165\x62\155\151\164")->icon("\x66\141\x20\146\x61\55\x73\x65\x61\162\x63\x68"), amis()->UrlAction()->className("\155\154\x2d\62")->icon("\x66\x61\40\146\x61\55\x65\170\164\x65\x72\156\x61\x6c\x2d\x6c\151\x6e\x6b\55\x61\154\x74")->label("\111\143\157\156\145\163")->blank()->url("\x68\164\x74\160\x73\72\x2f\57\151\x63\x6f\x6e\x65\x73\x2e\152\x73\56\x6f\x72\x67\57\x63\157\x6c\x6c\x65\143\x74\x69\157\156\x2f\x61\x6c\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\x24\173\x69\x63\157\x6e\175")->className("\x74\145\170\x74\55\x34\170\154")])); return amis()->PickerControl($Pk2Xe, $Qho6y)->pickerSchema($a1A5G)->modalSize("\154\x67")->source("\57\x5f\151\x63\157\x6e\x69\x66\171\x5f\x73\x65\141\162\x63\150")->labelField("\151\143\x6f\156")->valueField("\x69\143\x6f\x6e"); } }
