<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 17:05:25              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $Z1tHR = '', string $r1KG9 = '') { $jnAqU = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\157\x6c\x75\155\x6e\163\x43\157\x75\156\164", 6)->footerToolbar(["\163\x74\141\x74\x69\x73\164\151\143\163", "\x70\x61\147\151\x6e\x61\x74\x69\157\x6e"])->api("\x2f\x5f\x69\x63\157\x6e\x69\x66\171\x5f\x73\145\141\162\x63\x68")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\160\x74\55\x33\x20\x70\142\55\63")->body([amis()->TextControl("\x71\165\145\x72\x79")->size("\155\144")->value("\x24\173" . $Z1tHR . "\40\174\174\40\42\150\x6f\155\x65\42\175")->clearable()->required(), amis()->Button()->label(admin_trans("\141\144\155\151\x6e\56\x73\x65\x61\x72\x63\x68"))->level("\160\162\151\155\141\x72\x79")->actionType("\x73\165\x62\155\x69\x74")->icon("\x66\x61\x20\x66\141\x2d\x73\145\x61\x72\x63\150"), amis()->UrlAction()->className("\155\x6c\55\x32")->icon("\146\x61\40\x66\x61\55\x65\x78\164\x65\162\156\141\x6c\55\x6c\151\x6e\153\55\x61\x6c\x74")->label("\x49\x63\x6f\x6e\145\163")->blank()->url("\150\164\x74\160\163\72\57\x2f\151\143\x6f\x6e\x65\x73\x2e\152\x73\x2e\157\162\x67\57\143\157\154\154\x65\x63\164\151\157\156\57\x61\154\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\173\x69\x63\157\156\175")->className("\164\x65\x78\x74\x2d\x34\170\x6c")])); return amis()->PickerControl($Z1tHR, $r1KG9)->pickerSchema($jnAqU)->modalSize("\x6c\x67")->source("\x2f\137\x69\143\157\x6e\151\146\x79\137\163\x65\141\162\143\150")->labelField("\x69\x63\x6f\156")->valueField("\x69\x63\x6f\156"); } }
