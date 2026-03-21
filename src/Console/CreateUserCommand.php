<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-03-22 00:00:27              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\141\144\x6d\151\x6e\72\143\162\x65\x61\x74\x65\x2d\165\163\145\x72"; protected $description = "\x43\162\145\x61\x74\145\40\x61\x20\165\x73\x65\x72\40\x66\157\x72\40\x61\144\x6d\151\156\40\160\141\156\x65\x6c\x2e"; public function handle() { goto suWyl; VDYN1: $M_dyV = AdminRole::all(); goto GLRWV; eROfE: $GlV9M->roles()->attach($M_dyV); goto Qu4P3; GLRWV: $oSPHr = $this->choice("\x50\x6c\145\x61\163\145\40\x63\150\x6f\x6f\163\145\x20\141\40\x72\157\x6c\x65\40\146\157\x72\x20\164\150\145\40\x75\x73\145\162", $M_dyV->pluck("\156\141\155\145")->toArray(), null, null, true); goto IFzl_; TFpXY: $GlV9M = new AdminUser(["\x75\163\x65\x72\x6e\x61\155\145" => $tmEgh, "\x70\141\x73\163\167\x6f\162\x64" => $psegY, "\156\141\x6d\x65" => $hFAt5]); goto L7iqO; IFzl_: $M_dyV = $M_dyV->filter(function ($srdu8) use($oSPHr) { return in_array($srdu8->name, $oSPHr); }); goto TFpXY; L7iqO: $GlV9M->save(); goto eROfE; suWyl: $tmEgh = $this->ask("\120\x6c\x65\141\x73\x65\x20\145\156\x74\x65\x72\x20\x61\x20\x75\163\x65\162\x6e\x61\155\x65\40\x74\x6f\40\x6c\157\x67\151\156"); goto vR0BQ; mowi6: $hFAt5 = $this->ask("\x50\154\x65\141\x73\145\40\145\156\164\x65\162\40\141\40\x6e\141\155\145\x20\164\x6f\40\x64\151\x73\160\x6c\x61\x79"); goto VDYN1; Qu4P3: $this->info("\x55\x73\x65\x72\40\133{$hFAt5}\x5d\40\143\162\145\141\164\x65\x64\40\163\x75\143\x63\145\163\163\x66\x75\154\x6c\x79\x2e"); goto eBBVO; vR0BQ: $psegY = bcrypt($this->secret("\120\x6c\x65\x61\x73\145\x20\145\156\164\145\x72\40\141\40\160\141\163\163\167\x6f\x72\144\40\164\x6f\40\154\157\x67\151\156")); goto mowi6; eBBVO: } }
