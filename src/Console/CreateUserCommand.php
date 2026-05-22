<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:17              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\x61\144\x6d\151\156\72\x63\x72\x65\x61\x74\145\x2d\x75\163\x65\x72"; protected $description = "\103\x72\x65\141\164\x65\40\x61\40\165\x73\x65\162\40\x66\x6f\162\40\x61\144\155\x69\156\x20\160\x61\x6e\x65\154\x2e"; public function handle() { goto xryty; OKJ5E: $eB0oo->roles()->attach($pYK4t); goto A5yVm; qwBHr: $e6Cgu = $this->choice("\x50\x6c\145\x61\163\x65\x20\x63\150\157\x6f\x73\145\x20\141\x20\x72\157\x6c\x65\40\x66\157\x72\40\x74\150\145\x20\x75\163\x65\x72", $pYK4t->pluck("\x6e\141\155\x65")->toArray(), null, null, true); goto vKqft; A5yVm: $this->info("\125\163\145\x72\40\133{$Z1tHR}\135\40\x63\162\x65\141\164\145\x64\40\163\165\x63\x63\x65\x73\x73\146\x75\154\x6c\171\x2e"); goto yLH9i; kMCIn: $Er8bm = bcrypt($this->secret("\x50\x6c\x65\141\x73\x65\40\x65\156\x74\145\x72\40\141\40\x70\x61\163\x73\x77\157\x72\144\x20\164\x6f\40\x6c\x6f\147\x69\156")); goto WI2Lg; xryty: $knJ9N = $this->ask("\x50\154\x65\x61\163\145\x20\x65\x6e\x74\145\162\x20\141\x20\165\163\x65\x72\156\141\x6d\145\x20\164\157\40\154\157\x67\151\x6e"); goto kMCIn; vKqft: $pYK4t = $pYK4t->filter(function ($SokBX) use($e6Cgu) { return in_array($SokBX->name, $e6Cgu); }); goto bJSg4; CyCyl: $pYK4t = AdminRole::all(); goto qwBHr; yfu32: $eB0oo->save(); goto OKJ5E; bJSg4: $eB0oo = new AdminUser(["\165\163\x65\x72\156\141\x6d\x65" => $knJ9N, "\160\x61\x73\x73\167\157\162\x64" => $Er8bm, "\x6e\141\155\x65" => $Z1tHR]); goto yfu32; WI2Lg: $Z1tHR = $this->ask("\x50\x6c\145\141\163\x65\40\x65\156\164\145\x72\40\141\x20\x6e\x61\155\x65\x20\x74\x6f\x20\x64\151\163\160\x6c\141\x79"); goto CyCyl; yLH9i: } }
