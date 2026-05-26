<?php
/*
    |__________________________________________________
    |  DagaSmart CE pro by 3.0.17  |
    |  Authorization on 2026-05-26 15:23:03              |
    |  GitHub: https://github.com/dagasmart/bizadmin    |
    |  Tel: 13511953492   |
    |  Email: dagasmart@qq.com   |
    |__________________________________________________|
*/
 namespace DagaSmart\BizAdmin\Library; class Aes { private string $key = "\145\61\60\x61\x64\x63\x33\x39\64\x39\x62\141\x35\x39\x61\142\142\145\65\x36\x65\x30\x35\x37\x66\x32\x30\x66\x38\x38\63\x65"; private string $method = "\101\x45\123\x2d\x31\62\x38\x2d\x45\103\x42"; private string $iv = ''; public function __construct($qCVru = []) { goto ZJDEC; Q9slS: hgY23: goto FkG7g; ZJDEC: if (!$qCVru) { goto RUO3b; } goto njVbN; FkG7g: RUO3b: goto CIAex; njVbN: foreach ($qCVru as $fBmpg => $GMKun) { $this->{$fBmpg} = $GMKun; MN2cr: } goto Q9slS; CIAex: } public function encrypt($MvDNw) : string { goto D3ibi; hcFRD: return strtr($ctVKD, "\53\57", "\x2d\x5f"); goto LSakj; Tbxgq: $ctVKD = base64_encode($ctVKD); goto hcFRD; D3ibi: $ctVKD = openssl_encrypt($MvDNw, $this->method, $this->key, OPENSSL_RAW_DATA, $this->iv); goto Tbxgq; LSakj: } public function decrypt($MvDNw) { goto DjVBu; DjVBu: $MvDNw = strtr($MvDNw, "\55\x5f", "\53\x2f"); goto iDWUJ; JRQV1: return is_json($Pckyd) ? json_decode($Pckyd, true) : $Pckyd; goto dVFcP; iDWUJ: $Pckyd = openssl_decrypt(base64_decode($MvDNw), $this->method, $this->key, OPENSSL_RAW_DATA, $this->iv); goto JRQV1; dVFcP: } }
