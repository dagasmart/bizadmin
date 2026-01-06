<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $MBBjY = '', string $aIUuK = '') { $A6k01 = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\x63\x6f\154\x75\x6d\156\163\103\157\165\x6e\164", 6)->footerToolbar(["\163\164\x61\x74\x69\163\164\151\x63\163", "\x70\141\147\x69\156\x61\164\x69\157\156"])->api("\57\137\151\143\x6f\156\151\x66\x79\137\163\145\x61\x72\143\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\164\x2d\x33\40\160\x62\x2d\x33")->body([amis()->TextControl("\x71\x75\145\162\x79")->size("\x6d\144")->value("\x24\173" . $MBBjY . "\40\x7c\x7c\x20\42\x68\x6f\x6d\145\42\175")->clearable()->required(), amis()->Button()->label(admin_trans("\x61\144\155\151\x6e\56\x73\145\x61\x72\x63\150"))->level("\x70\162\x69\x6d\x61\162\171")->actionType("\x73\x75\142\x6d\151\x74")->icon("\x66\141\40\x66\x61\x2d\x73\x65\x61\x72\143\150"), amis()->UrlAction()->className("\155\x6c\55\62")->icon("\146\x61\40\x66\x61\x2d\x65\170\164\145\x72\156\x61\154\x2d\154\x69\156\x6b\55\x61\154\164")->label("\111\143\x6f\x6e\x65\163")->blank()->url("\150\x74\164\160\163\72\x2f\57\x69\x63\157\x6e\x65\163\x2e\152\x73\x2e\157\x72\147\x2f\143\157\154\154\145\143\164\x69\157\x6e\57\x61\154\x6c")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\44\x7b\151\143\157\x6e\175")->className("\x74\x65\170\x74\x2d\x34\170\154")])); return amis()->PickerControl($MBBjY, $aIUuK)->pickerSchema($A6k01)->modalSize("\154\x67")->source("\x2f\137\x69\x63\x6f\156\x69\146\171\x5f\x73\145\x61\162\143\150")->labelField("\x69\x63\157\x6e")->valueField("\x69\x63\157\x6e"); } }
