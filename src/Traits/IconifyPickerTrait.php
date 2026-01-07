<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:23              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $nZRUA = '', string $RzZ8s = '') { $F8WRB = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\157\154\x75\x6d\x6e\x73\103\157\165\156\164", 6)->footerToolbar(["\x73\164\141\164\151\x73\x74\151\143\x73", "\x70\x61\147\151\156\141\x74\151\x6f\156"])->api("\x2f\137\151\x63\x6f\156\151\146\x79\x5f\163\145\141\x72\x63\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\160\164\55\63\x20\160\x62\x2d\63")->body([amis()->TextControl("\161\165\x65\x72\x79")->size("\155\x64")->value("\44\x7b" . $nZRUA . "\40\x7c\174\40\x22\x68\x6f\x6d\x65\x22\x7d")->clearable()->required(), amis()->Button()->label(admin_trans("\141\x64\x6d\x69\x6e\56\x73\145\141\162\x63\150"))->level("\x70\x72\151\155\x61\162\171")->actionType("\x73\165\142\x6d\151\x74")->icon("\x66\141\40\146\x61\x2d\x73\145\141\162\x63\x68"), amis()->UrlAction()->className("\155\x6c\x2d\x32")->icon("\x66\x61\40\x66\141\x2d\x65\170\x74\145\x72\156\x61\x6c\x2d\x6c\151\x6e\x6b\x2d\141\154\164")->label("\111\143\157\156\145\163")->blank()->url("\x68\164\164\160\x73\72\x2f\x2f\151\143\157\x6e\145\163\56\x6a\x73\56\157\162\147\x2f\143\157\x6c\154\x65\x63\164\151\x6f\156\x2f\141\x6c\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\x24\x7b\x69\143\x6f\x6e\175")->className("\x74\145\170\164\55\64\170\154")])); return amis()->PickerControl($nZRUA, $RzZ8s)->pickerSchema($F8WRB)->modalSize("\154\147")->source("\57\137\x69\143\x6f\156\x69\x66\x79\137\163\x65\x61\162\143\150")->labelField("\151\143\x6f\156")->valueField("\151\x63\x6f\x6e"); } }
