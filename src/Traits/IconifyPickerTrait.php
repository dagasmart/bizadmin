<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:37              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $AIfpB = '', string $XoScQ = '') { $k10FN = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\143\x6f\x6c\165\x6d\156\163\x43\x6f\x75\x6e\x74", 6)->footerToolbar(["\163\164\141\x74\x69\x73\x74\151\x63\x73", "\160\141\x67\x69\x6e\x61\x74\x69\x6f\x6e"])->api("\x2f\x5f\151\x63\157\x6e\151\x66\x79\x5f\163\x65\141\x72\x63\150")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\x74\x2d\x33\40\x70\142\55\63")->body([amis()->TextControl("\161\165\145\x72\x79")->size("\155\144")->value("\44\173" . $AIfpB . "\40\x7c\x7c\40\42\x68\157\155\x65\42\175")->clearable()->required(), amis()->Button()->label(admin_trans("\141\144\155\x69\156\56\163\145\x61\162\143\150"))->level("\160\162\x69\x6d\141\162\x79")->actionType("\x73\x75\142\x6d\x69\x74")->icon("\x66\x61\40\146\x61\x2d\163\145\x61\162\143\150"), amis()->UrlAction()->className("\x6d\x6c\x2d\62")->icon("\x66\x61\x20\146\141\x2d\x65\x78\164\145\162\x6e\141\154\x2d\154\x69\x6e\x6b\x2d\x61\154\164")->label("\111\x63\157\156\145\163")->blank()->url("\x68\164\x74\160\x73\x3a\x2f\57\x69\143\x6f\156\145\163\56\x6a\163\56\x6f\162\x67\57\143\x6f\154\154\x65\143\164\151\157\x6e\57\141\154\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\x24\173\151\x63\157\156\x7d")->className("\164\145\x78\x74\x2d\64\170\154")])); return amis()->PickerControl($AIfpB, $XoScQ)->pickerSchema($k10FN)->modalSize("\x6c\x67")->source("\x2f\137\151\143\x6f\x6e\151\146\171\x5f\x73\145\x61\162\x63\x68")->labelField("\151\x63\157\156")->valueField("\151\x63\x6f\x6e"); } }
