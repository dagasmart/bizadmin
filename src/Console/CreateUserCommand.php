<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:40              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\x61\144\x6d\x69\x6e\x3a\x63\162\145\x61\164\145\55\165\x73\x65\x72"; protected $description = "\x43\162\x65\x61\x74\x65\x20\141\40\x75\x73\x65\162\x20\146\x6f\x72\40\141\x64\155\151\156\40\x70\x61\156\x65\x6c\x2e"; public function handle() { goto au7nA; ceVGA: $SFIi6->save(); goto i90Mq; Ccxwf: $ikv5p = bcrypt($this->secret("\120\154\x65\x61\x73\145\40\x65\156\x74\x65\162\40\141\40\x70\x61\163\163\167\157\x72\144\x20\x74\x6f\x20\154\157\x67\x69\156")); goto HuHNn; SIuFr: $VUXLu = $this->choice("\x50\154\x65\141\163\x65\40\143\150\x6f\x6f\x73\145\x20\141\x20\x72\157\x6c\145\x20\x66\157\162\x20\x74\x68\145\x20\x75\163\x65\x72", $VWcNt->pluck("\156\141\x6d\x65")->toArray(), null, null, true); goto I11LY; wtWUO: $SFIi6 = new AdminUser(["\165\163\x65\x72\156\141\155\x65" => $Mzzyt, "\160\x61\163\x73\x77\157\x72\x64" => $ikv5p, "\156\x61\x6d\145" => $MeMAA]); goto ceVGA; p4ixZ: $VWcNt = AdminRole::all(); goto SIuFr; I11LY: $VWcNt = $VWcNt->filter(function ($c2OD5) use($VUXLu) { return in_array($c2OD5->name, $VUXLu); }); goto wtWUO; i90Mq: $SFIi6->roles()->attach($VWcNt); goto PdL_q; PdL_q: $this->info("\x55\163\x65\162\40\x5b{$MeMAA}\x5d\40\x63\x72\145\x61\164\x65\144\x20\x73\165\x63\x63\x65\163\163\146\165\x6c\154\x79\56"); goto J20Wc; au7nA: $Mzzyt = $this->ask("\x50\x6c\145\141\163\x65\x20\x65\156\164\x65\162\40\141\x20\x75\163\x65\x72\156\141\x6d\145\x20\x74\x6f\x20\x6c\x6f\x67\151\156"); goto Ccxwf; HuHNn: $MeMAA = $this->ask("\120\x6c\x65\141\x73\145\40\145\156\x74\x65\x72\x20\x61\40\x6e\x61\x6d\x65\40\x74\157\x20\144\151\x73\160\154\141\x79"); goto p4ixZ; J20Wc: } }
