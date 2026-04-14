<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:40              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $Z1tHR = '', string $r1KG9 = '') { $jnAqU = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\x63\157\x6c\x75\155\156\x73\x43\x6f\165\156\164", 6)->footerToolbar(["\163\164\141\164\151\163\164\x69\143\163", "\x70\141\x67\151\x6e\141\x74\x69\x6f\x6e"])->api("\57\x5f\151\x63\157\x6e\151\146\171\137\163\x65\141\162\x63\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\160\164\55\63\40\160\x62\55\63")->body([amis()->TextControl("\161\x75\145\162\171")->size("\x6d\x64")->value("\x24\173" . $Z1tHR . "\40\x7c\174\x20\x22\150\157\155\145\42\175")->clearable()->required(), amis()->Button()->label(admin_trans("\141\144\155\x69\156\x2e\163\x65\x61\x72\x63\150"))->level("\x70\162\151\x6d\141\x72\x79")->actionType("\163\165\142\x6d\x69\x74")->icon("\151\x63\157\156\146\157\x6e\164\40\x69\143\x6f\156\55\x73\x65\141\x72\x63\150"), amis()->UrlAction()->className("\x6d\x6c\x2d\x32")->icon("\151\x63\x6f\x6e\146\157\156\164\x20\x69\x63\x6f\156\55\154\x69\156\x6b")->label("\111\x63\x6f\x6e\x65\163")->blank()->url("\150\x74\x74\x70\x73\72\x2f\x2f\151\x63\x6f\x6e\x65\x73\56\152\x73\x2e\157\x72\x67\57\x63\157\x6c\154\x65\x63\164\151\x6f\156\x2f\141\x6c\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\173\151\143\157\x6e\x7d")->className("\164\x65\x78\x74\55\x34\x78\154")])); return amis()->PickerControl($Z1tHR, $r1KG9)->pickerSchema($jnAqU)->modalSize("\154\x67")->source("\57\x5f\x69\x63\x6f\x6e\x69\x66\171\x5f\163\145\x61\162\143\150")->labelField("\151\143\157\x6e")->valueField("\x69\143\157\x6e"); } }
