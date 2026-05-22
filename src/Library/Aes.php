<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-22 11:59:18              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Library; class Aes { private string $key = "\145\x31\x30\x61\144\143\63\x39\64\71\x62\141\x35\x39\x61\x62\142\145\x35\66\145\60\x35\x37\x66\62\60\x66\x38\x38\x33\x65"; private string $method = "\101\105\123\55\61\62\x38\x2d\105\x43\x42"; private string $iv = ''; public function __construct($qCVru = []) { goto Nc24p; P1K6t: o2jF4: goto nhLDP; nhLDP: EBbn0: goto cBqUY; HNpUz: foreach ($qCVru as $fBmpg => $GMKun) { $this->{$fBmpg} = $GMKun; ynvcO: } goto P1K6t; Nc24p: if (!$qCVru) { goto EBbn0; } goto HNpUz; cBqUY: } public function encrypt($MvDNw) : string { goto h8k_x; jRu0j: return strtr($ctVKD, "\53\x2f", "\55\137"); goto PS7gD; Tw87x: $ctVKD = base64_encode($ctVKD); goto jRu0j; h8k_x: $ctVKD = openssl_encrypt($MvDNw, $this->method, $this->key, OPENSSL_RAW_DATA, $this->iv); goto Tw87x; PS7gD: } public function decrypt($MvDNw) { goto pvKbE; pvKbE: $MvDNw = strtr($MvDNw, "\55\137", "\x2b\57"); goto vuLLE; PYxbq: return is_json($Pckyd) ? json_decode($Pckyd, true) : $Pckyd; goto AgvDB; vuLLE: $Pckyd = openssl_decrypt(base64_decode($MvDNw), $this->method, $this->key, OPENSSL_RAW_DATA, $this->iv); goto PYxbq; AgvDB: } }
