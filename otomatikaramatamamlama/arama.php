<?php
//Kullanici tarafindan arama formuna yazilan ifadeyi MySQL veritabani uzerinde arayan PHP sayfasi

include("ayarlar.php");
$veri = $_REQUEST["dil"]; //veritabani baglantisi yapilan ayarlar.php dosyasini cagiriyoruz.

if($veri) {
	$veriler = mysql_query("select * from dil where dil like '%$veri%'");
        if(!mysql_num_rows($veriler)) {
        	echo "Aradiginiz kelime bulunamadi!";
	} else {
		echo "Programlama Dilleri!<br>";
		while($liste=mysql_fetch_array($veriler)) {
			echo "<a href=#".$liste["id"].">".$liste["dil"]."</a><br>";
		}
	}
} else {
	echo "Bir seyler yazmaya baslayin...";
}
?>
