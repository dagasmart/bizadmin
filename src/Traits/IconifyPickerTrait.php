<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:08              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $agbTa = '', string $slM0I = '') { $Oj1lV = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\157\154\165\x6d\156\x73\x43\x6f\165\156\164", 6)->footerToolbar(["\163\x74\141\x74\x69\x73\x74\x69\143\163", "\160\x61\x67\x69\156\x61\164\151\x6f\x6e"])->api("\x2f\137\151\x63\157\x6e\151\146\171\137\163\x65\141\x72\143\x68")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\160\x74\55\x33\40\160\142\55\x33")->body([amis()->TextControl("\161\x75\145\162\171")->size("\x6d\x64")->value("\x24\173" . $agbTa . "\40\174\174\x20\42\150\157\155\145\x22\175")->clearable()->required(), amis()->Button()->label(admin_trans("\141\x64\x6d\151\x6e\56\163\145\x61\x72\x63\150"))->level("\160\x72\x69\155\x61\162\x79")->actionType("\163\x75\142\x6d\x69\x74")->icon("\x66\x61\x20\146\x61\x2d\163\145\x61\x72\143\150"), amis()->UrlAction()->className("\155\x6c\x2d\62")->icon("\146\141\x20\146\141\55\x65\170\x74\145\x72\156\x61\x6c\x2d\x6c\x69\156\x6b\x2d\141\154\164")->label("\111\143\x6f\156\x65\x73")->blank()->url("\x68\x74\x74\160\x73\x3a\x2f\57\151\143\x6f\x6e\145\163\56\152\163\x2e\x6f\162\147\x2f\x63\157\x6c\x6c\145\143\164\151\157\x6e\x2f\x61\x6c\x6c")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\x7b\x69\x63\x6f\x6e\175")->className("\x74\145\170\x74\x2d\x34\x78\154")])); return amis()->PickerControl($agbTa, $slM0I)->pickerSchema($Oj1lV)->modalSize("\154\147")->source("\57\x5f\151\143\x6f\x6e\x69\146\x79\x5f\x73\145\x61\x72\x63\x68")->labelField("\x69\x63\157\156")->valueField("\151\x63\157\x6e"); } }
