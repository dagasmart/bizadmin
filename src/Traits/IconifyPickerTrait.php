<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $MeMAA = '', string $Jcm9o = '') { $mQJY6 = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\x63\x6f\154\165\155\x6e\x73\x43\157\x75\x6e\164", 6)->footerToolbar(["\x73\164\x61\x74\151\163\x74\151\x63\x73", "\x70\141\x67\151\156\141\x74\151\157\156"])->api("\x2f\x5f\151\x63\x6f\x6e\x69\146\171\137\163\145\141\x72\x63\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\160\164\x2d\x33\40\160\142\x2d\x33")->body([amis()->TextControl("\161\x75\x65\162\171")->size("\x6d\144")->value("\44\173" . $MeMAA . "\x20\x7c\174\40\x22\x68\157\x6d\x65\x22\175")->clearable()->required(), amis()->Button()->label(admin_trans("\141\x64\x6d\x69\x6e\x2e\x73\x65\141\162\143\150"))->level("\160\162\x69\155\141\x72\171")->actionType("\163\165\x62\155\151\164")->icon("\x66\x61\x20\x66\x61\x2d\163\145\x61\162\x63\150"), amis()->UrlAction()->className("\x6d\154\55\x32")->icon("\146\x61\40\x66\x61\x2d\145\x78\164\x65\x72\x6e\x61\154\x2d\x6c\151\x6e\x6b\x2d\x61\x6c\164")->label("\x49\143\157\156\145\163")->blank()->url("\x68\x74\164\160\163\x3a\x2f\57\x69\x63\x6f\156\145\x73\x2e\x6a\163\56\157\162\147\57\143\x6f\x6c\154\x65\143\x74\x69\x6f\156\57\x61\154\x6c")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\x24\173\x69\143\157\x6e\x7d")->className("\x74\x65\x78\164\55\64\170\x6c")])); return amis()->PickerControl($MeMAA, $Jcm9o)->pickerSchema($mQJY6)->modalSize("\154\x67")->source("\x2f\x5f\151\x63\157\156\x69\x66\x79\x5f\x73\145\x61\162\143\150")->labelField("\151\x63\157\156")->valueField("\x69\x63\157\156"); } }
