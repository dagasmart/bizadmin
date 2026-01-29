<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 22:52:33              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\141\144\x6d\x69\156\x3a\x63\x72\145\x61\x74\145\55\165\163\145\162"; protected $description = "\103\x72\x65\x61\x74\x65\x20\x61\x20\x75\163\x65\162\40\146\x6f\x72\x20\x61\x64\x6d\151\156\x20\160\141\x6e\145\154\x2e"; public function handle() { goto ZfRPS; R9Ioz: $this->info("\x55\163\145\162\40\133{$maQNe}\135\x20\x63\x72\145\141\164\145\x64\x20\x73\x75\143\x63\x65\163\x73\146\165\154\154\171\x2e"); goto LRHEq; tV1K3: $z_vEa->roles()->attach($KnNbO); goto R9Ioz; J8UR9: $KnNbO = AdminRole::all(); goto o8UbF; mc7sc: $z_vEa = new AdminUser(["\x75\163\x65\162\156\141\155\145" => $TjwrM, "\160\141\163\x73\x77\157\x72\x64" => $k3RJe, "\156\141\x6d\x65" => $maQNe]); goto pRktk; ZfRPS: $TjwrM = $this->ask("\120\154\x65\x61\x73\145\x20\x65\x6e\164\x65\162\x20\x61\x20\165\163\x65\x72\156\141\155\145\x20\164\157\40\154\x6f\147\151\156"); goto TQVSg; TQVSg: $k3RJe = bcrypt($this->secret("\x50\x6c\145\141\163\145\x20\x65\x6e\x74\x65\162\x20\x61\x20\160\141\x73\x73\167\157\x72\144\x20\x74\157\40\x6c\x6f\147\x69\156")); goto VoLNS; Dwi8X: $KnNbO = $KnNbO->filter(function ($fpHfX) use($ZzX0l) { return in_array($fpHfX->name, $ZzX0l); }); goto mc7sc; VoLNS: $maQNe = $this->ask("\x50\x6c\x65\x61\163\x65\40\x65\156\x74\x65\x72\40\x61\40\x6e\141\155\x65\40\164\157\x20\144\x69\x73\160\154\141\171"); goto J8UR9; o8UbF: $ZzX0l = $this->choice("\120\x6c\x65\x61\x73\x65\40\143\150\x6f\x6f\x73\x65\x20\x61\x20\162\157\x6c\x65\40\x66\x6f\x72\40\x74\x68\x65\40\165\163\x65\162", $KnNbO->pluck("\x6e\141\x6d\145")->toArray(), null, null, true); goto Dwi8X; pRktk: $z_vEa->save(); goto tV1K3; LRHEq: } }
