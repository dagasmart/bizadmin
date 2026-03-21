<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $hFAt5 = '', string $xTdNu = '') { $J0FrK = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\x63\157\154\165\155\x6e\163\x43\x6f\165\156\164", 6)->footerToolbar(["\163\x74\141\164\151\163\x74\x69\143\x73", "\x70\x61\x67\151\x6e\141\164\x69\157\x6e"])->api("\x2f\x5f\x69\143\157\156\151\146\x79\x5f\163\145\x61\162\143\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\160\x74\55\63\40\x70\x62\x2d\x33")->body([amis()->TextControl("\161\x75\x65\x72\171")->size("\x6d\144")->value("\x24\173" . $hFAt5 . "\x20\174\x7c\x20\42\150\157\155\x65\x22\x7d")->clearable()->required(), amis()->Button()->label(admin_trans("\x61\x64\155\151\x6e\x2e\163\x65\x61\162\143\x68"))->level("\x70\162\x69\155\141\x72\x79")->actionType("\163\x75\x62\x6d\x69\x74")->icon("\151\x63\x6f\156\146\157\156\164\40\x69\x63\x6f\x6e\x2d\163\145\x61\162\x63\150"), amis()->UrlAction()->className("\x6d\x6c\x2d\x32")->icon("\151\x63\x6f\156\x66\x6f\156\x74\x20\x69\x63\x6f\156\55\154\x69\x6e\x6b")->label("\x49\x63\157\x6e\145\163")->blank()->url("\150\x74\x74\160\163\x3a\x2f\x2f\x69\x63\x6f\156\x65\163\x2e\x6a\x73\56\157\162\147\x2f\143\157\154\154\x65\x63\x74\151\157\156\57\x61\154\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\x7b\x69\x63\x6f\x6e\x7d")->className("\x74\145\x78\164\55\x34\x78\154")])); return amis()->PickerControl($hFAt5, $xTdNu)->pickerSchema($J0FrK)->modalSize("\x6c\147")->source("\x2f\x5f\151\x63\157\x6e\151\x66\x79\x5f\163\145\x61\x72\x63\x68")->labelField("\x69\143\157\x6e")->valueField("\x69\143\x6f\156"); } }
