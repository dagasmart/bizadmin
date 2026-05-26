<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:19              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $Z1tHR = '', string $r1KG9 = '') { $jnAqU = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\x6f\x6c\x75\155\156\163\103\x6f\165\156\x74", 6)->footerToolbar(["\163\x74\141\164\x69\163\x74\151\143\x73", "\x70\141\147\x69\x6e\x61\164\151\x6f\x6e"])->api("\x2f\x5f\x69\143\157\156\151\x66\x79\x5f\x73\145\x61\162\143\x68")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\164\55\x33\x20\160\142\55\x33")->body([amis()->TextControl("\161\165\145\162\x79")->size("\155\144")->value("\44\173" . $Z1tHR . "\40\x7c\174\40\42\150\x6f\x6d\x65\42\175")->minLength(2)->submitOnChange()->clearable()->required(), amis()->Button()->label(admin_trans("\x61\x64\155\x69\x6e\56\x73\x65\141\162\x63\x68"))->level("\160\162\151\155\x61\x72\x79")->actionType("\x73\x75\142\155\151\164")->icon("\x69\143\157\156\146\157\156\164\x20\151\143\x6f\156\x2d\163\145\x61\x72\x63\150"), amis()->UrlAction()->className("\x6d\x6c\x2d\x32")->icon("\x69\143\157\x6e\146\157\x6e\x74\x20\151\143\157\x6e\55\154\151\156\x6b")->label("\111\143\157\x6e\x65\x73")->blank()->url("\x68\164\x74\160\x73\72\x2f\x2f\151\x63\x6f\x6e\x65\x73\x2e\x6a\x73\x2e\157\x72\x67\x2f\x63\x6f\x6c\154\x65\x63\164\x69\x6f\156\57\141\x6c\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\x7b\151\143\157\156\x7d")->className("\x74\x65\170\164\x2d\x34\x78\x6c")])); return amis()->PickerControl($Z1tHR, $r1KG9)->pickerSchema($jnAqU)->modalSize("\x6c\147")->source("\57\x5f\151\143\x6f\x6e\151\146\171\137\x73\145\x61\x72\x63\x68")->labelField("\151\x63\157\x6e")->valueField("\x69\x63\157\x6e"); } }
