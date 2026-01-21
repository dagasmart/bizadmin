<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 14:50:53              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $YpkaR = '', string $KcjfJ = '') { $GU04m = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\x63\x6f\x6c\165\x6d\156\x73\x43\x6f\165\156\164", 6)->footerToolbar(["\x73\x74\x61\x74\x69\163\x74\151\x63\x73", "\x70\x61\x67\151\x6e\141\164\151\157\156"])->api("\x2f\x5f\x69\x63\x6f\156\151\146\x79\x5f\163\145\x61\162\x63\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\164\x2d\63\40\160\142\x2d\x33")->body([amis()->TextControl("\x71\165\145\162\x79")->size("\155\x64")->value("\x24\173" . $YpkaR . "\x20\174\174\40\x22\150\x6f\x6d\x65\42\175")->clearable()->required(), amis()->Button()->label(admin_trans("\x61\x64\155\151\156\x2e\x73\x65\x61\x72\x63\150"))->level("\160\x72\x69\x6d\141\162\x79")->actionType("\163\165\x62\x6d\151\164")->icon("\x66\x61\x20\x66\141\55\x73\145\x61\162\143\150"), amis()->UrlAction()->className("\x6d\154\x2d\x32")->icon("\146\x61\40\146\141\x2d\145\x78\x74\145\x72\156\141\x6c\55\154\151\156\x6b\x2d\141\154\x74")->label("\x49\143\x6f\156\145\x73")->blank()->url("\150\164\x74\x70\x73\72\57\x2f\x69\x63\157\156\x65\x73\56\x6a\x73\56\157\x72\147\x2f\143\157\154\154\x65\x63\x74\151\x6f\156\57\x61\x6c\x6c")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\x24\173\151\143\x6f\156\x7d")->className("\x74\145\x78\164\55\64\170\154")])); return amis()->PickerControl($YpkaR, $KcjfJ)->pickerSchema($GU04m)->modalSize("\154\147")->source("\x2f\x5f\151\143\157\156\151\146\171\x5f\x73\x65\x61\162\x63\x68")->labelField("\x69\x63\157\156")->valueField("\151\143\157\156"); } }
