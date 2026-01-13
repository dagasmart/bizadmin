<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-13 11:29:46              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\141\144\155\x69\156\72\x63\162\145\x61\x74\145\55\165\x73\x65\162"; protected $description = "\103\162\145\141\164\x65\40\141\40\165\163\x65\162\x20\146\157\162\x20\141\x64\x6d\151\156\40\160\x61\156\x65\154\x2e"; public function handle() { goto DODlM; KBGKA: $JKb1D = AdminRole::all(); goto rfcDH; DODlM: $UJVqr = $this->ask("\120\154\x65\x61\x73\145\40\145\156\164\145\162\x20\141\40\x75\163\145\x72\x6e\141\155\x65\x20\164\157\40\x6c\157\147\x69\x6e"); goto A3z2e; pljYd: $this->info("\125\163\x65\162\40\133{$GkRP7}\135\40\143\162\x65\141\x74\x65\144\40\163\x75\143\x63\145\163\163\x66\165\154\x6c\171\x2e"); goto aNh2C; rZMlK: $b04B4->roles()->attach($JKb1D); goto pljYd; A3z2e: $fKhW7 = bcrypt($this->secret("\120\x6c\145\141\163\145\40\145\x6e\164\x65\162\x20\141\x20\x70\x61\x73\163\x77\x6f\162\144\40\x74\157\x20\154\x6f\147\x69\156")); goto oDTsQ; Hd0mN: $b04B4->save(); goto rZMlK; oDTsQ: $GkRP7 = $this->ask("\120\154\145\141\163\x65\40\145\x6e\164\145\x72\40\x61\40\x6e\x61\155\x65\40\164\157\40\144\x69\163\x70\x6c\141\x79"); goto KBGKA; qIEs_: $b04B4 = new AdminUser(["\x75\x73\x65\x72\x6e\x61\x6d\x65" => $UJVqr, "\160\x61\x73\x73\167\x6f\x72\144" => $fKhW7, "\156\141\x6d\145" => $GkRP7]); goto Hd0mN; LAsXV: $JKb1D = $JKb1D->filter(function ($VRNdS) use($Onoja) { return in_array($VRNdS->name, $Onoja); }); goto qIEs_; rfcDH: $Onoja = $this->choice("\120\x6c\145\141\x73\x65\x20\143\x68\x6f\x6f\x73\145\40\141\40\x72\157\x6c\x65\x20\146\157\162\40\164\150\x65\x20\165\x73\x65\x72", $JKb1D->pluck("\156\141\x6d\x65")->toArray(), null, null, true); goto LAsXV; aNh2C: } }
