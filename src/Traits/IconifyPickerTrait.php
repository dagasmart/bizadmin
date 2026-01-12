<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:12:01              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $OW5TW = '', string $hFk0k = '') { $eHprp = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\x63\157\x6c\x75\155\x6e\x73\x43\x6f\165\x6e\164", 6)->footerToolbar(["\163\164\141\x74\x69\163\164\x69\x63\163", "\160\141\147\151\x6e\x61\x74\151\157\156"])->api("\x2f\137\x69\x63\x6f\x6e\151\146\171\137\x73\x65\x61\162\143\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\160\x74\x2d\x33\40\160\142\x2d\x33")->body([amis()->TextControl("\x71\x75\145\x72\171")->size("\155\x64")->value("\x24\173" . $OW5TW . "\40\174\x7c\40\x22\x68\x6f\155\x65\42\x7d")->clearable()->required(), amis()->Button()->label(admin_trans("\x61\144\x6d\x69\156\56\163\145\141\162\143\150"))->level("\160\x72\151\155\x61\162\171")->actionType("\163\x75\142\155\151\164")->icon("\146\141\40\x66\141\x2d\163\x65\141\162\x63\150"), amis()->UrlAction()->className("\155\154\55\62")->icon("\x66\141\40\146\x61\55\145\x78\x74\145\162\156\x61\x6c\x2d\x6c\151\156\153\55\141\154\164")->label("\111\x63\x6f\156\x65\x73")->blank()->url("\150\x74\164\x70\163\x3a\57\57\x69\x63\x6f\x6e\x65\163\x2e\x6a\163\x2e\x6f\162\x67\x2f\x63\x6f\x6c\x6c\145\143\x74\151\157\x6e\x2f\x61\x6c\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\x24\x7b\151\x63\157\x6e\175")->className("\164\145\170\164\55\64\x78\x6c")])); return amis()->PickerControl($OW5TW, $hFk0k)->pickerSchema($eHprp)->modalSize("\x6c\147")->source("\57\x5f\x69\143\x6f\x6e\x69\146\171\137\163\145\141\162\143\x68")->labelField("\151\x63\157\156")->valueField("\x69\143\x6f\x6e"); } }
