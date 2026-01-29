<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:42              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $maQNe = '', string $FHswK = '') { $xf67P = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\x6f\x6c\165\x6d\x6e\x73\x43\x6f\x75\x6e\x74", 6)->footerToolbar(["\163\x74\141\164\151\x73\x74\x69\x63\x73", "\160\x61\x67\151\156\x61\164\x69\157\x6e"])->api("\x2f\137\x69\143\157\156\x69\x66\x79\137\163\x65\141\x72\x63\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\164\55\x33\40\x70\x62\x2d\x33")->body([amis()->TextControl("\x71\x75\145\162\x79")->size("\x6d\144")->value("\44\x7b" . $maQNe . "\x20\174\174\40\42\x68\157\x6d\145\42\175")->clearable()->required(), amis()->Button()->label(admin_trans("\141\144\155\151\x6e\x2e\163\x65\x61\162\x63\x68"))->level("\160\x72\151\x6d\x61\162\171")->actionType("\x73\x75\142\x6d\151\x74")->icon("\x66\141\40\146\141\55\163\145\141\162\x63\150"), amis()->UrlAction()->className("\155\154\x2d\x32")->icon("\146\141\x20\x66\x61\x2d\145\x78\x74\x65\x72\156\141\x6c\x2d\154\151\x6e\x6b\x2d\141\154\x74")->label("\x49\143\x6f\x6e\145\163")->blank()->url("\x68\x74\x74\x70\x73\72\57\57\x69\x63\157\x6e\x65\163\56\x6a\x73\56\157\162\x67\x2f\x63\157\154\154\145\x63\164\151\x6f\x6e\x2f\141\154\x6c")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\173\151\x63\x6f\x6e\175")->className("\x74\145\170\x74\55\64\x78\154")])); return amis()->PickerControl($maQNe, $FHswK)->pickerSchema($xf67P)->modalSize("\154\x67")->source("\57\x5f\151\143\x6f\x6e\x69\146\x79\x5f\x73\x65\141\162\x63\x68")->labelField("\x69\x63\157\x6e")->valueField("\x69\143\x6f\156"); } }
