<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:21              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $Z1tHR = '', string $r1KG9 = '') { $jnAqU = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\x6f\154\x75\155\156\163\x43\x6f\165\x6e\x74", 6)->footerToolbar(["\163\x74\x61\x74\x69\x73\164\151\143\163", "\x70\141\147\151\156\x61\164\151\x6f\156"])->api("\x2f\137\151\x63\x6f\156\x69\146\x79\x5f\x73\x65\141\x72\143\x68")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\164\x2d\63\x20\160\x62\x2d\x33")->body([amis()->TextControl("\161\x75\145\x72\171")->size("\155\x64")->value("\x24\173" . $Z1tHR . "\x20\x7c\x7c\x20\x22\150\157\x6d\145\42\175")->clearable()->required(), amis()->Button()->label(admin_trans("\141\x64\x6d\x69\156\56\x73\x65\x61\162\143\150"))->level("\x70\162\151\155\x61\162\171")->actionType("\x73\165\x62\155\151\x74")->icon("\151\x63\x6f\x6e\x66\157\x6e\x74\40\151\143\x6f\x6e\x2d\163\145\141\x72\143\150"), amis()->UrlAction()->className("\155\154\x2d\x32")->icon("\x69\x63\x6f\x6e\x66\157\156\x74\x20\151\x63\157\x6e\x2d\154\x69\156\x6b")->label("\x49\x63\x6f\156\x65\163")->blank()->url("\x68\x74\x74\x70\163\x3a\57\57\x69\x63\157\x6e\145\x73\x2e\152\x73\x2e\157\162\x67\x2f\143\x6f\x6c\x6c\145\143\x74\151\x6f\x6e\57\141\154\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\173\x69\143\x6f\x6e\175")->className("\x74\145\170\164\x2d\x34\x78\x6c")])); return amis()->PickerControl($Z1tHR, $r1KG9)->pickerSchema($jnAqU)->modalSize("\154\x67")->source("\x2f\x5f\151\x63\x6f\x6e\151\x66\x79\x5f\x73\x65\141\x72\143\x68")->labelField("\x69\143\x6f\156")->valueField("\x69\x63\157\156"); } }
