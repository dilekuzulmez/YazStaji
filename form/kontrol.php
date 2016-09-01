<?php
$isim = $_REQUEST["isim"];
$soyisim = $_REQUEST["soyisim"];
$eposta = $_REQUEST["eposta"];
$yorum = $_REQUEST["yorum"];
$mesaj = "";
if(empty($isim)){
	$mesaj .= "Lutfen isim alanini doldurunuz.<br>";
}
if(empty($soyisim)){
        $mesaj .= "Lutfen soyisim alanini doldurunuz.<br>";
}
if(empty($eposta)){
        $mesaj .= "Lutfen eposta alanini doldurunuz.<br>";
}
if(empty($mesaj)){
        echo "Giris basarili!<br>";
	echo "Bilgiler<br>";
	echo "Isim:".$isim."<br>";
	echo "Soyisim:".$soyisim."<br>";
	echo "E-posta:".$eposta."<br>";

}
else{
	echo $mesaj;
}
?>
