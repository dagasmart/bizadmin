<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-09 15:18:45              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $hpAhb = '', string $Bhyff = '') { $zTSGp = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\x63\x6f\x6c\x75\155\156\163\x43\157\165\x6e\x74", 6)->footerToolbar(["\163\x74\x61\x74\151\163\x74\151\143\163", "\160\141\147\151\156\x61\x74\151\x6f\x6e"])->api("\x2f\x5f\x69\x63\x6f\156\151\x66\x79\x5f\x73\145\x61\x72\x63\x68")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\x74\x2d\63\x20\160\x62\55\63")->body([amis()->TextControl("\x71\x75\145\162\171")->size("\x6d\x64")->value("\x24\173" . $hpAhb . "\x20\174\x7c\x20\x22\150\157\155\145\42\x7d")->clearable()->required(), amis()->Button()->label(admin_trans("\x61\x64\155\151\x6e\56\163\145\x61\x72\143\x68"))->level("\160\x72\151\155\141\x72\171")->actionType("\163\x75\x62\155\x69\164")->icon("\x66\x61\40\146\141\55\x73\x65\x61\162\x63\150"), amis()->UrlAction()->className("\x6d\x6c\x2d\62")->icon("\146\141\40\146\141\55\x65\170\164\x65\162\156\141\154\x2d\154\151\x6e\x6b\55\141\154\164")->label("\111\x63\157\x6e\x65\x73")->blank()->url("\x68\x74\x74\x70\163\x3a\57\57\151\x63\x6f\x6e\145\163\x2e\x6a\163\56\157\162\x67\57\x63\x6f\x6c\x6c\x65\143\164\x69\157\156\57\141\154\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\x7b\x69\143\157\156\x7d")->className("\x74\x65\170\164\x2d\x34\x78\x6c")])); return amis()->PickerControl($hpAhb, $Bhyff)->pickerSchema($zTSGp)->modalSize("\x6c\x67")->source("\x2f\x5f\x69\x63\x6f\156\x69\x66\171\137\x73\x65\x61\x72\143\x68")->labelField("\151\143\157\x6e")->valueField("\x69\x63\x6f\x6e"); } }
