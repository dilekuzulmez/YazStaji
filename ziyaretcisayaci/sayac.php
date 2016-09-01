<?php
ini_set('display_errors', '0');
$dosyaAdi = "sayac.txt";
$dosyaIcerik = file_get_contents($dosyaAdi);
$guncelIcerik = $dosyaIcerik + 1;

if(!file_exists($dosyaAdi)) {
	echo "Dosya mevcut degildi, su an olusturuldu...<br>";
	touch($dosyaAdi);
	chmod($dosyaAdi, 0777); //dosyadan yazma, dosyayi okuma ve dosyadan calistirma
	file_put_contents($dosyaAdi, 1);
}
else {
	$dosyaBaglanti = fopen($dosyaAdi, "w+");

	if(!$dosyaIcerik){
	echo "Dosya icerigi mevcut degil, yeniden duzenlendi...<br>";
	fwrite($dosyaBaglanti, 1);
	}
	else {
		fwrite($dosyaBaglanti, $guncelIcerik);
	}
	fclose($dosyaBaglanti);
}

echo "Sayfa Ziyaret Sayisi : ".$guncelIcerik;
?>

