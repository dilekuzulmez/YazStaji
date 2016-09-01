<?php
$adi= $_REQUEST["adi"];
$dogumYili = $_REQUEST["dogumYili"];
$yas = date("Y") - $dogumYili;
echo "Merhaba<br>";
echo "Adiniz Soyadiniz:".$adi."<br>";
echo "Yasiniz:".$yas;
?>
