<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 22:14:38              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Console; use Illuminate\Console\Command; use DagaSmart\BizAdmin\Models\AdminUser; use DagaSmart\BizAdmin\Models\AdminRole; class CreateUserCommand extends Command { protected $signature = "\141\144\155\151\156\x3a\143\x72\x65\141\164\x65\x2d\x75\x73\x65\162"; protected $description = "\x43\x72\x65\141\164\145\x20\x61\x20\x75\x73\x65\x72\x20\x66\157\162\40\x61\x64\155\151\x6e\x20\160\141\156\145\154\x2e"; public function handle() { goto aUl0e; yKaCl: $Q3B9L = $this->choice("\120\154\145\x61\x73\145\x20\x63\x68\157\x6f\x73\145\40\141\x20\162\x6f\x6c\x65\40\x66\157\162\40\164\150\x65\x20\165\x73\x65\x72", $nl1jU->pluck("\x6e\x61\x6d\x65")->toArray(), null, null, true); goto pVqNT; vSxqq: $SqMn2->save(); goto bHR0o; zEo2H: $nl1jU = AdminRole::all(); goto yKaCl; u7bsR: $this->info("\x55\163\x65\x72\x20\133{$MBBjY}\x5d\40\143\x72\x65\x61\164\145\144\x20\163\165\143\x63\x65\x73\163\x66\165\154\x6c\171\56"); goto eVLww; bHR0o: $SqMn2->roles()->attach($nl1jU); goto u7bsR; qeVsg: $dCQ2R = bcrypt($this->secret("\x50\x6c\145\141\x73\145\x20\145\x6e\164\x65\162\x20\x61\40\160\141\x73\163\167\x6f\162\144\40\164\157\x20\154\x6f\147\151\x6e")); goto YbKmG; YbKmG: $MBBjY = $this->ask("\x50\x6c\145\x61\163\x65\40\145\156\x74\x65\x72\40\141\40\156\x61\155\145\40\164\157\40\x64\x69\x73\x70\154\x61\x79"); goto zEo2H; m3vM3: $SqMn2 = new AdminUser(["\x75\x73\x65\x72\156\141\155\x65" => $dAbRC, "\160\141\163\163\x77\157\162\144" => $dCQ2R, "\x6e\141\x6d\x65" => $MBBjY]); goto vSxqq; aUl0e: $dAbRC = $this->ask("\120\x6c\145\141\163\145\x20\145\156\x74\145\x72\40\x61\x20\165\163\x65\162\156\x61\155\145\40\164\157\40\154\157\147\151\156"); goto qeVsg; pVqNT: $nl1jU = $nl1jU->filter(function ($VmdSD) use($Q3B9L) { return in_array($VmdSD->name, $Q3B9L); }); goto m3vM3; eVLww: } }
