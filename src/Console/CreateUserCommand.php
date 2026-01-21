<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-21 09:22:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\x61\x64\x6d\151\156\x3a\143\x72\145\141\164\x65\55\165\163\145\x72"; protected $description = "\x43\162\145\141\164\x65\40\141\x20\165\163\145\x72\40\x66\x6f\x72\40\x61\x64\155\x69\156\40\160\x61\156\x65\x6c\56"; public function handle() { goto bSbwO; s8Weg: $Pk2Xe = $this->ask("\x50\154\145\x61\x73\x65\x20\x65\156\164\x65\x72\40\141\x20\156\x61\155\145\40\x74\157\x20\144\x69\x73\160\x6c\141\171"); goto YnCgI; NA_RI: $g_sMj->save(); goto zBViM; yvBWs: $this->info("\x55\163\x65\x72\40\133{$Pk2Xe}\135\40\x63\x72\145\x61\x74\x65\x64\40\x73\x75\143\143\x65\x73\163\x66\x75\154\154\x79\56"); goto G1H54; zBViM: $g_sMj->roles()->attach($mxZiB); goto yvBWs; n3P2r: $g_sMj = new AdminUser(["\165\163\x65\162\x6e\141\155\145" => $QOlq1, "\160\x61\x73\163\x77\x6f\x72\144" => $zdgjD, "\x6e\141\x6d\x65" => $Pk2Xe]); goto NA_RI; YnCgI: $mxZiB = AdminRole::all(); goto Y00Rh; TnYQf: $mxZiB = $mxZiB->filter(function ($JDMl_) use($naUhx) { return in_array($JDMl_->name, $naUhx); }); goto n3P2r; Y00Rh: $naUhx = $this->choice("\120\154\145\x61\163\x65\x20\143\x68\157\x6f\163\145\x20\x61\x20\x72\x6f\154\145\40\x66\157\x72\40\x74\150\x65\40\x75\163\145\x72", $mxZiB->pluck("\x6e\141\155\145")->toArray(), null, null, true); goto TnYQf; bSbwO: $QOlq1 = $this->ask("\x50\x6c\145\x61\163\145\x20\145\x6e\x74\x65\162\x20\141\40\165\x73\x65\162\156\x61\155\x65\x20\164\x6f\x20\x6c\x6f\147\x69\x6e"); goto JvGpj; JvGpj: $zdgjD = bcrypt($this->secret("\120\x6c\145\141\163\145\40\x65\x6e\164\x65\162\x20\x61\40\160\x61\163\x73\x77\157\x72\144\x20\164\x6f\x20\x6c\x6f\x67\151\x6e")); goto s8Weg; G1H54: } }
