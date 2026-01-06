<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-01-06 17:16:44              |
    |  GitHub: https://github.com/dagasmart/proadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Support\Cores; use Illuminate\Support\Arr; use Illuminate\Support\Fluent; use DagaSmart\BizAdmin\Support\Helper; class Context extends Fluent { public function set($s_0_B, $AHvXX = null) { goto efQ4K; efQ4K: $PN11n = is_array($s_0_B) ? $s_0_B : [$s_0_B => $AHvXX]; goto L34fK; iksbt: g3m_z: goto jIYx8; L34fK: foreach ($PN11n as $s_0_B => $AHvXX) { Arr::set($this->attributes, $s_0_B, $AHvXX); B110y: } goto iksbt; jIYx8: return $this; goto au5Uz; au5Uz: } public function get($s_0_B, $Cs_8o = null) { return Arr::get($this->attributes, $s_0_B, $Cs_8o); } public function remember($s_0_B, \Closure $lfkfu) { goto IN2uC; M4yCU: yicV1: goto IqZtC; IN2uC: if (!(($AHvXX = $this->get($s_0_B)) !== null)) { goto yicV1; } goto vefW1; IqZtC: return tap($lfkfu(), function ($AHvXX) use($s_0_B) { $this->set($s_0_B, $AHvXX); }); goto Me8u7; vefW1: return $AHvXX; goto M4yCU; Me8u7: } public function getArray($s_0_B, $Cs_8o = null) { return Helper::array($this->get($s_0_B, $Cs_8o), false); } public function add($s_0_B, $AHvXX, $yZQbX = null) { goto xKD6q; lIGdh: goto Gi8g8; goto I5cQX; iJFhA: Gi8g8: goto zHmXZ; zHmXZ: return $this->set($s_0_B, $Um4pZ); goto cQLBq; PWH2W: $Um4pZ[$yZQbX] = $AHvXX; goto lIGdh; I5cQX: xMCxo: goto p7VXt; eJP9C: if ($yZQbX === null) { goto xMCxo; } goto PWH2W; xKD6q: $Um4pZ = $this->getArray($s_0_B); goto eJP9C; p7VXt: $Um4pZ[] = $AHvXX; goto iJFhA; cQLBq: } public function merge($s_0_B, array $AHvXX) { $Um4pZ = $this->getArray($s_0_B); return $this->set($s_0_B, array_merge($Um4pZ, $AHvXX)); } public function forget($gSXaf) { Arr::forget($this->attributes, $gSXaf); } public function flush() { $this->attributes = []; } }
