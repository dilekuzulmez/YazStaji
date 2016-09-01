<?php

session_start();
 //oturum başlatma
$harfler = array("a", "b", "c");

$harfrasgele = rand(0,2);

$rasgele = rand(100000000, 999999999);

$metin = $harfler[$harfrasgele].$rasgele;

$_SESSION["captcha"] = $metin;
 //güvenlik kodunu captcha oturumuna tanımlama
$resim = imagecreatetruecolor(100, 30);
 //genişlik:100 yükseklik:30 piksel boş resim
$arkaplanrenk = imagecolorallocate($resim, 55, 55, 55);
 //arkaplan siyah tonlarında
$fontrenk = imagecolorallocate($resim, 35, 255, 155);
 //resmin üzerindeki kod yeşil renk

imagefill($resim, 0, 0, $arkaplanrenk);

imagestring($resim, 5, 5, 5, $metin, $fontrenk);
 //yazıyı resmin üzerine yerleştirme
header("Cache-Control: no-cache");

header('Content-type: image/png'); //sayfa özelliklerini oluşturma

imagepng($resim);

imagedestroy($resim); //resmi basma

?>

