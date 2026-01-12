<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 16:13:44              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\141\144\x6d\151\x6e\x3a\x63\x72\145\141\x74\x65\x2d\165\x73\x65\162"; protected $description = "\x43\x72\145\141\x74\x65\x20\x61\40\165\163\x65\x72\40\x66\x6f\x72\x20\141\144\x6d\x69\x6e\x20\x70\x61\x6e\145\154\x2e"; public function handle() { goto w0yGy; jpnFi: $YmE8p = $this->choice("\x50\154\145\x61\x73\x65\x20\143\x68\157\x6f\163\145\40\x61\40\x72\157\154\x65\40\x66\x6f\162\x20\164\x68\145\x20\x75\x73\x65\x72", $TWKQi->pluck("\156\141\155\145")->toArray(), null, null, true); goto uagUB; kUn3X: $TWKQi = AdminRole::all(); goto jpnFi; oMsgd: $this->info("\x55\163\145\162\x20\133{$oLGy6}\x5d\x20\143\x72\145\x61\164\x65\144\x20\x73\x75\143\x63\x65\x73\x73\146\165\x6c\x6c\171\x2e"); goto LWU9a; w0yGy: $EJEuo = $this->ask("\x50\154\x65\x61\163\145\40\x65\156\164\145\162\40\x61\x20\x75\163\x65\162\x6e\x61\155\x65\40\x74\x6f\x20\x6c\157\x67\151\x6e"); goto ss5Tm; cruYT: $slPmP->roles()->attach($TWKQi); goto oMsgd; uagUB: $TWKQi = $TWKQi->filter(function ($HZmBD) use($YmE8p) { return in_array($HZmBD->name, $YmE8p); }); goto jgHQP; ss5Tm: $od0K3 = bcrypt($this->secret("\x50\154\x65\x61\163\x65\40\x65\x6e\x74\x65\162\40\141\40\160\141\x73\163\x77\x6f\162\x64\40\164\x6f\x20\154\x6f\147\151\x6e")); goto pdryh; ZD_tE: $slPmP->save(); goto cruYT; pdryh: $oLGy6 = $this->ask("\120\x6c\145\141\163\145\x20\x65\x6e\x74\x65\x72\40\141\x20\x6e\141\x6d\x65\x20\164\157\40\x64\x69\163\160\x6c\141\171"); goto kUn3X; jgHQP: $slPmP = new AdminUser(["\x75\x73\145\162\156\x61\155\x65" => $EJEuo, "\160\x61\163\163\x77\x6f\x72\144" => $od0K3, "\x6e\141\155\145" => $oLGy6]); goto ZD_tE; LWU9a: } }
