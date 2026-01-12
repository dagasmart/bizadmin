<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-12 17:11:57              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\141\144\x6d\x69\156\x3a\143\162\x65\141\x74\x65\55\x75\163\x65\162"; protected $description = "\103\162\x65\141\x74\145\x20\141\40\165\163\145\x72\40\146\x6f\x72\x20\141\144\x6d\x69\156\40\x70\141\156\145\x6c\56"; public function handle() { goto gayqY; wjFjd: $this->info("\x55\163\x65\162\x20\x5b{$OW5TW}\x5d\x20\143\162\145\x61\164\145\x64\40\163\x75\143\x63\x65\163\x73\146\x75\x6c\x6c\x79\x2e"); goto F4XyJ; E6kwF: $c_ya_ = bcrypt($this->secret("\x50\x6c\145\x61\163\145\40\145\156\164\145\x72\40\141\x20\160\141\x73\163\x77\x6f\162\144\x20\x74\157\40\154\157\147\151\x6e")); goto SZxJp; j6Ojp: $IPCOs = $this->choice("\120\x6c\145\141\163\x65\x20\143\150\x6f\157\163\145\40\141\40\x72\157\154\x65\40\x66\157\162\40\x74\x68\x65\x20\x75\x73\145\x72", $YSpiR->pluck("\x6e\x61\x6d\145")->toArray(), null, null, true); goto BbqoE; SZxJp: $OW5TW = $this->ask("\x50\154\145\141\163\x65\40\x65\156\x74\145\162\40\141\x20\156\x61\155\x65\40\164\x6f\40\x64\151\163\160\154\141\171"); goto UaVCO; BbqoE: $YSpiR = $YSpiR->filter(function ($HD6gh) use($IPCOs) { return in_array($HD6gh->name, $IPCOs); }); goto GHj4p; ovC4U: $nVZzx->save(); goto rjUDV; UaVCO: $YSpiR = AdminRole::all(); goto j6Ojp; GHj4p: $nVZzx = new AdminUser(["\165\163\x65\162\x6e\x61\x6d\145" => $zwvbu, "\160\x61\x73\x73\167\157\x72\x64" => $c_ya_, "\x6e\x61\x6d\x65" => $OW5TW]); goto ovC4U; rjUDV: $nVZzx->roles()->attach($YSpiR); goto wjFjd; gayqY: $zwvbu = $this->ask("\x50\154\145\x61\x73\x65\x20\x65\156\x74\145\x72\x20\141\x20\x75\x73\145\x72\156\x61\155\x65\x20\164\157\40\154\157\x67\x69\x6e"); goto E6kwF; F4XyJ: } }
