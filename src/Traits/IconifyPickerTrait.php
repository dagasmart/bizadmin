<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:41              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $t4gM0 = '', string $Mhi8K = '') { $HeNBa = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\x63\157\x6c\x75\155\156\x73\x43\x6f\x75\156\x74", 6)->footerToolbar(["\163\164\141\164\151\x73\x74\151\143\163", "\x70\141\x67\x69\156\x61\x74\151\157\x6e"])->api("\57\x5f\151\143\x6f\156\151\146\x79\x5f\x73\145\x61\x72\x63\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\160\x74\x2d\63\x20\160\x62\x2d\x33")->body([amis()->TextControl("\x71\x75\145\x72\x79")->size("\x6d\x64")->value("\x24\173" . $t4gM0 . "\x20\174\174\x20\42\x68\x6f\x6d\145\42\x7d")->clearable()->required(), amis()->Button()->label(admin_trans("\141\144\155\x69\156\x2e\163\x65\x61\162\x63\x68"))->level("\x70\162\151\155\x61\162\171")->actionType("\163\165\142\155\x69\164")->icon("\x66\141\40\x66\141\55\x73\x65\x61\x72\x63\150"), amis()->UrlAction()->className("\x6d\154\x2d\62")->icon("\x66\141\x20\146\141\55\x65\170\164\145\x72\156\x61\x6c\55\x6c\x69\156\153\55\x61\x6c\x74")->label("\x49\143\157\x6e\145\x73")->blank()->url("\x68\164\164\x70\163\x3a\x2f\x2f\x69\x63\157\x6e\x65\163\56\x6a\163\56\x6f\162\147\x2f\x63\x6f\154\154\x65\143\164\x69\157\x6e\57\x61\x6c\x6c")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\173\151\x63\x6f\x6e\175")->className("\164\x65\170\x74\55\64\x78\154")])); return amis()->PickerControl($t4gM0, $Mhi8K)->pickerSchema($HeNBa)->modalSize("\x6c\x67")->source("\57\137\x69\143\157\156\151\146\x79\137\x73\145\x61\162\x63\x68")->labelField("\x69\x63\157\156")->valueField("\x69\143\157\x6e"); } }
