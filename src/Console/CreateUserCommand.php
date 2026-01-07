<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:37:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\141\144\x6d\x69\x6e\72\x63\162\x65\x61\164\145\55\165\163\145\x72"; protected $description = "\103\x72\x65\141\164\145\40\x61\40\x75\163\145\162\40\x66\157\162\x20\141\144\155\151\x6e\x20\x70\x61\156\145\154\x2e"; public function handle() { goto MwRvr; sSTvY: $wlKYF->save(); goto maW1J; MwRvr: $cgwcN = $this->ask("\120\x6c\x65\x61\163\x65\x20\145\x6e\x74\145\162\x20\x61\40\165\x73\x65\x72\156\141\155\x65\x20\x74\157\x20\x6c\x6f\x67\151\156"); goto SiPxH; uGkXu: $SqTv3 = AdminRole::all(); goto gLJP1; gLJP1: $L602C = $this->choice("\120\x6c\x65\141\x73\145\x20\143\x68\157\157\163\145\40\x61\x20\x72\157\154\x65\x20\146\157\x72\40\164\150\x65\40\x75\x73\x65\x72", $SqTv3->pluck("\x6e\141\155\x65")->toArray(), null, null, true); goto VBITY; SiPxH: $vcbZX = bcrypt($this->secret("\120\154\145\x61\x73\x65\40\145\x6e\x74\x65\x72\x20\141\40\x70\x61\x73\x73\167\x6f\162\144\40\164\x6f\40\154\x6f\147\x69\156")); goto Z1GxA; VBITY: $SqTv3 = $SqTv3->filter(function ($Pjogr) use($L602C) { return in_array($Pjogr->name, $L602C); }); goto Cx0Jc; maW1J: $wlKYF->roles()->attach($SqTv3); goto p0c1a; Cx0Jc: $wlKYF = new AdminUser(["\165\x73\145\162\156\141\155\x65" => $cgwcN, "\160\x61\x73\163\167\157\162\144" => $vcbZX, "\x6e\x61\x6d\145" => $agbTa]); goto sSTvY; p0c1a: $this->info("\125\163\x65\162\40\133{$agbTa}\x5d\x20\x63\162\145\x61\x74\145\x64\x20\163\x75\x63\x63\x65\163\163\146\165\154\x6c\171\56"); goto CZNCL; Z1GxA: $agbTa = $this->ask("\x50\x6c\145\141\163\x65\x20\x65\156\x74\145\162\x20\141\x20\156\x61\x6d\145\x20\164\x6f\x20\144\x69\163\x70\154\141\x79"); goto uGkXu; CZNCL: } }
