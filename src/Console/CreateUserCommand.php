<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-07 13:12:19              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\141\x64\155\151\156\72\143\x72\145\x61\x74\145\x2d\165\163\145\162"; protected $description = "\x43\162\x65\x61\x74\145\x20\x61\x20\x75\163\145\x72\x20\x66\x6f\162\40\141\x64\155\151\156\x20\160\141\156\x65\x6c\56"; public function handle() { goto zcBQO; w_rJn: $gEee7->save(); goto KK2ck; XUkiU: $Y85NC = bcrypt($this->secret("\120\154\x65\141\x73\145\x20\145\156\x74\145\x72\40\141\x20\x70\141\163\163\167\x6f\x72\144\40\x74\x6f\40\x6c\157\147\x69\156")); goto w14TJ; zcBQO: $gR0pV = $this->ask("\120\x6c\145\141\163\x65\40\145\x6e\x74\145\162\40\x61\x20\x75\163\145\162\x6e\141\155\145\40\x74\x6f\x20\154\x6f\147\151\x6e"); goto XUkiU; ayuko: $U2JfO = AdminRole::all(); goto ta9A2; B436A: $U2JfO = $U2JfO->filter(function ($C4nPU) use($Ek_rU) { return in_array($C4nPU->name, $Ek_rU); }); goto DlG4k; w14TJ: $nZRUA = $this->ask("\x50\154\145\141\x73\145\40\x65\156\164\145\x72\40\141\40\x6e\141\155\145\x20\x74\x6f\x20\x64\x69\163\x70\x6c\x61\x79"); goto ayuko; KK2ck: $gEee7->roles()->attach($U2JfO); goto IrdtO; DlG4k: $gEee7 = new AdminUser(["\x75\163\145\162\156\141\x6d\x65" => $gR0pV, "\160\141\163\163\x77\x6f\x72\x64" => $Y85NC, "\156\x61\x6d\145" => $nZRUA]); goto w_rJn; ta9A2: $Ek_rU = $this->choice("\120\x6c\145\x61\163\145\x20\143\x68\x6f\x6f\163\145\x20\141\40\x72\157\154\145\x20\146\x6f\x72\40\164\150\x65\x20\165\x73\145\162", $U2JfO->pluck("\x6e\x61\155\145")->toArray(), null, null, true); goto B436A; IrdtO: $this->info("\x55\x73\145\x72\40\x5b{$nZRUA}\x5d\x20\143\x72\145\x61\164\x65\x64\x20\163\165\x63\x63\x65\163\163\x66\x75\154\x6c\x79\56"); goto ENUho; ENUho: } }
