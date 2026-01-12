<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:48              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Traits; trait IconifyPickerTrait { public function iconifyPicker(string $oLGy6 = '', string $GkFq2 = '') { $kf5iX = amis()->CRUDCards()->perPage(24)->loadDataOnce()->set("\x63\x6f\154\165\155\156\163\103\x6f\x75\156\x74", 6)->footerToolbar(["\163\164\141\x74\x69\163\164\151\143\x73", "\160\x61\147\x69\156\141\x74\151\x6f\x6e"])->api("\x2f\x5f\151\x63\157\156\x69\x66\171\137\163\x65\x61\x72\x63\x68")->filter(amis()->Form()->wrapWithPanel(false)->body([amis()->GroupControl()->className("\x70\x74\x2d\63\x20\x70\142\x2d\x33")->body([amis()->TextControl("\161\165\145\x72\x79")->size("\x6d\144")->value("\44\x7b" . $oLGy6 . "\40\x7c\174\40\42\x68\157\x6d\x65\42\x7d")->clearable()->required(), amis()->Button()->label(admin_trans("\x61\x64\155\x69\x6e\56\x73\x65\x61\x72\x63\150"))->level("\160\162\151\155\141\x72\171")->actionType("\x73\x75\x62\155\x69\164")->icon("\146\x61\x20\x66\x61\55\x73\x65\141\x72\143\x68"), amis()->UrlAction()->className("\x6d\x6c\x2d\62")->icon("\146\141\40\x66\x61\x2d\x65\170\164\145\x72\156\141\154\55\154\x69\x6e\x6b\x2d\141\x6c\x74")->label("\x49\143\x6f\x6e\145\x73")->blank()->url("\x68\x74\164\160\163\72\x2f\57\x69\x63\157\x6e\x65\x73\x2e\152\x73\56\157\x72\x67\57\143\x6f\x6c\x6c\145\143\x74\x69\157\x6e\57\141\154\154")])]))->card(amis()->Card()->body([amis()->SvgIcon()->icon("\x24\173\151\x63\157\156\x7d")->className("\x74\145\x78\164\55\64\x78\154")])); return amis()->PickerControl($oLGy6, $GkFq2)->pickerSchema($kf5iX)->modalSize("\154\147")->source("\57\x5f\x69\x63\x6f\x6e\x69\x66\171\137\x73\x65\x61\x72\143\150")->labelField("\151\143\x6f\x6e")->valueField("\x69\x63\157\156"); } }
