<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-04-14 15:46:36              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\x61\144\x6d\151\x6e\72\x63\x72\x65\x61\x74\145\55\165\163\145\162"; protected $description = "\103\162\145\141\164\x65\40\141\40\x75\163\x65\162\x20\x66\x6f\162\x20\x61\x64\x6d\x69\x6e\40\160\141\156\x65\154\x2e"; public function handle() { goto kqQiX; lgNNa: $eB0oo->save(); goto dUR6x; xYAmM: $pYK4t = AdminRole::all(); goto hk8nm; WEW_3: $Er8bm = bcrypt($this->secret("\x50\x6c\145\141\163\145\40\145\x6e\164\x65\x72\40\x61\40\160\141\163\163\x77\157\x72\144\x20\164\x6f\x20\x6c\x6f\147\x69\156")); goto FKVhf; dUR6x: $eB0oo->roles()->attach($pYK4t); goto cLYJu; U1yqa: $eB0oo = new AdminUser(["\x75\163\145\162\x6e\x61\x6d\x65" => $knJ9N, "\160\x61\163\x73\167\x6f\x72\144" => $Er8bm, "\x6e\141\x6d\x65" => $Z1tHR]); goto lgNNa; jfBAV: $pYK4t = $pYK4t->filter(function ($SokBX) use($e6Cgu) { return in_array($SokBX->name, $e6Cgu); }); goto U1yqa; kqQiX: $knJ9N = $this->ask("\x50\x6c\145\x61\x73\145\40\145\156\x74\145\x72\x20\x61\40\165\x73\145\x72\156\141\x6d\x65\x20\164\157\40\x6c\x6f\147\151\156"); goto WEW_3; cLYJu: $this->info("\125\163\x65\x72\40\133{$Z1tHR}\x5d\40\143\162\145\141\164\145\x64\40\x73\165\143\143\145\x73\163\146\165\x6c\154\x79\x2e"); goto Bcf1S; FKVhf: $Z1tHR = $this->ask("\x50\x6c\x65\141\163\145\x20\x65\156\x74\x65\x72\x20\x61\x20\156\141\155\145\x20\x74\x6f\40\x64\x69\163\160\154\x61\171"); goto xYAmM; hk8nm: $e6Cgu = $this->choice("\x50\x6c\x65\x61\x73\x65\x20\143\150\157\157\x73\x65\40\141\x20\162\x6f\x6c\x65\40\146\157\162\x20\164\x68\x65\40\165\163\x65\162", $pYK4t->pluck("\156\x61\155\x65")->toArray(), null, null, true); goto jfBAV; Bcf1S: } }
