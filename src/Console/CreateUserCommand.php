<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 18:24:33              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\x61\x64\155\x69\156\72\143\162\145\x61\164\x65\x2d\x75\163\145\162"; protected $description = "\x43\x72\x65\141\x74\145\x20\141\x20\165\x73\145\x72\x20\x66\157\162\40\x61\144\x6d\151\x6e\x20\x70\141\156\x65\x6c\56"; public function handle() { goto V9gaZ; u3NEp: $D8uV1->roles()->attach($ng7Rw); goto jSbj1; nHxIw: $D8uV1->save(); goto u3NEp; goMO2: $ng7Rw = $ng7Rw->filter(function ($yMN28) use($tgalV) { return in_array($yMN28->name, $tgalV); }); goto nPb8g; aQoWE: $CxfET = bcrypt($this->secret("\x50\x6c\145\141\163\x65\x20\145\156\x74\145\x72\40\141\x20\160\141\x73\x73\x77\157\x72\x64\40\x74\157\x20\154\x6f\147\151\156")); goto xQ_Fs; nPb8g: $D8uV1 = new AdminUser(["\x75\x73\x65\x72\x6e\141\155\145" => $x1ed8, "\160\x61\163\163\x77\157\x72\x64" => $CxfET, "\156\141\x6d\x65" => $AIfpB]); goto nHxIw; xQ_Fs: $AIfpB = $this->ask("\x50\154\x65\x61\x73\x65\40\x65\156\164\145\162\x20\x61\40\x6e\x61\x6d\x65\40\164\157\40\x64\151\163\160\154\x61\x79"); goto WReHG; V9gaZ: $x1ed8 = $this->ask("\120\154\145\141\x73\x65\x20\145\156\x74\145\x72\x20\x61\40\x75\163\145\x72\156\x61\155\145\x20\164\x6f\x20\154\157\147\x69\x6e"); goto aQoWE; WReHG: $ng7Rw = AdminRole::all(); goto T7gum; T7gum: $tgalV = $this->choice("\x50\154\x65\141\x73\x65\x20\143\x68\x6f\157\x73\x65\40\x61\40\x72\x6f\154\x65\x20\146\157\x72\40\164\x68\x65\x20\x75\163\x65\162", $ng7Rw->pluck("\x6e\141\155\x65")->toArray(), null, null, true); goto goMO2; jSbj1: $this->info("\x55\163\145\x72\40\133{$AIfpB}\x5d\40\x63\162\x65\141\x74\145\x64\40\163\x75\x63\143\145\163\x73\x66\165\154\154\x79\x2e"); goto HiJic; HiJic: } }
