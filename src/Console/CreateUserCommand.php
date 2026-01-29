<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-29 23:04:29              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\141\144\155\151\x6e\72\143\x72\145\141\x74\145\x2d\165\x73\145\x72"; protected $description = "\103\162\145\141\164\x65\x20\141\x20\x75\x73\145\x72\40\146\157\162\40\141\x64\x6d\x69\156\40\x70\x61\156\x65\154\56"; public function handle() { goto Tslu9; OvPAI: $Lwt2y->roles()->attach($LWw2T); goto JTjWp; Tslu9: $rst5m = $this->ask("\120\154\x65\x61\x73\x65\40\x65\x6e\x74\x65\x72\x20\141\40\x75\x73\x65\x72\x6e\x61\x6d\x65\x20\164\157\x20\x6c\157\147\151\156"); goto Pjr5F; Pjr5F: $xQLur = bcrypt($this->secret("\x50\x6c\145\x61\x73\145\x20\145\156\x74\145\x72\40\x61\x20\160\x61\x73\x73\x77\x6f\162\144\x20\x74\157\40\x6c\157\x67\x69\x6e")); goto osVrG; osVrG: $Jq9oR = $this->ask("\x50\154\145\x61\163\x65\40\x65\x6e\164\145\162\40\x61\x20\156\x61\x6d\x65\40\164\157\40\x64\x69\x73\x70\154\141\x79"); goto KEXmx; uI6GE: $Lwt2y = new AdminUser(["\x75\163\x65\162\156\x61\155\x65" => $rst5m, "\x70\x61\x73\163\x77\157\162\144" => $xQLur, "\x6e\141\x6d\x65" => $Jq9oR]); goto u3gyv; bKbPw: $LWw2T = $LWw2T->filter(function ($B_kFd) use($c36d_) { return in_array($B_kFd->name, $c36d_); }); goto uI6GE; u3gyv: $Lwt2y->save(); goto OvPAI; tjaME: $c36d_ = $this->choice("\x50\x6c\x65\x61\x73\x65\x20\143\x68\x6f\157\x73\x65\40\x61\x20\x72\x6f\154\x65\40\x66\x6f\x72\40\164\x68\x65\40\x75\x73\145\x72", $LWw2T->pluck("\156\141\x6d\x65")->toArray(), null, null, true); goto bKbPw; JTjWp: $this->info("\x55\x73\145\162\40\x5b{$Jq9oR}\x5d\x20\x63\x72\x65\141\x74\145\x64\40\x73\165\x63\143\x65\163\163\x66\165\154\154\x79\x2e"); goto NKFI6; KEXmx: $LWw2T = AdminRole::all(); goto tjaME; NKFI6: } }
