<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-23 17:05:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\x61\144\x6d\x69\x6e\x3a\143\x72\145\x61\x74\145\55\x75\163\145\162"; protected $description = "\103\162\145\x61\164\x65\40\141\x20\x75\163\145\162\40\x66\x6f\162\40\141\144\x6d\x69\x6e\x20\160\x61\x6e\145\x6c\56"; public function handle() { goto H1d12; rtrUS: $u0puj->save(); goto irL6L; e3tJe: $t4gM0 = $this->ask("\x50\x6c\x65\141\163\x65\40\x65\156\x74\x65\162\x20\141\40\156\x61\155\145\x20\x74\157\x20\x64\151\163\160\154\141\171"); goto feEfH; qxoCa: $MnEE4 = bcrypt($this->secret("\x50\x6c\x65\141\163\145\40\145\156\164\x65\x72\40\x61\40\160\x61\x73\163\167\157\162\x64\x20\164\x6f\x20\x6c\x6f\x67\151\x6e")); goto e3tJe; wVU5Z: $u0puj = new AdminUser(["\x75\x73\145\x72\156\141\155\x65" => $AiYSq, "\x70\x61\x73\163\167\x6f\162\x64" => $MnEE4, "\x6e\x61\155\x65" => $t4gM0]); goto rtrUS; irL6L: $u0puj->roles()->attach($Vl6Lx); goto Gr__S; H1d12: $AiYSq = $this->ask("\x50\154\x65\x61\163\x65\40\145\156\x74\x65\162\40\x61\40\x75\x73\145\x72\156\x61\x6d\145\40\164\x6f\x20\x6c\157\x67\151\156"); goto qxoCa; Gr__S: $this->info("\125\x73\x65\x72\40\x5b{$t4gM0}\135\40\x63\162\145\141\164\x65\144\40\163\x75\x63\143\145\x73\x73\x66\x75\154\x6c\x79\x2e"); goto f1mlM; GcoKX: $Vl6Lx = $Vl6Lx->filter(function ($vnI2S) use($GzFaS) { return in_array($vnI2S->name, $GzFaS); }); goto wVU5Z; Qv6JM: $GzFaS = $this->choice("\x50\x6c\145\141\x73\145\x20\143\x68\x6f\x6f\x73\x65\40\x61\x20\162\x6f\x6c\x65\40\146\x6f\162\40\x74\x68\145\40\x75\x73\145\x72", $Vl6Lx->pluck("\x6e\x61\x6d\x65")->toArray(), null, null, true); goto GcoKX; feEfH: $Vl6Lx = AdminRole::all(); goto Qv6JM; f1mlM: } }
