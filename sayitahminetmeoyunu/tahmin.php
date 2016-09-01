<?php
$sayi = $_REQUEST["sayi"];
$gelecekSayi = rand(1,10);

if(!$sayi){
	echo "Bir veri girmeniz gerekmektedir!";
}
else {
	if($sayi < $gelecekSayi) {
		echo "Tahmin ettiginiz sayi gelen sayidan kucuktur.";
}
elseif($sayi > $gelecekSayi){
	echo "Tahmin ettiginiz sayi gelen sayidan buyuktur.";
}
elseif($sayi == $gelecekSayi){
	echo "Tahmininiz dogru!";
}
else {
	return false;
}
        echo "<br><br>Gelen sayi:".$gelecekSayi."<br>";
	echo "Sizin tahmininiz:".$sayi;
}
?>
