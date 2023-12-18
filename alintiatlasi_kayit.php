<?php

$vt_sunucu = "localhost";
$vt_kullaniciAdi = "root";
$vt_sifre = "";
$vt_adi = "kayitol";

$baglan = mysqli_connect($vt_sunucu, $vt_kullaniciAdi, $vt_sifre, $vt_adi);

if (!$baglan) {
    die("Başarısızzzzz: " .mysqli_connect_error());
} 

?>
