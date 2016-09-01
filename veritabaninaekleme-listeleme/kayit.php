<html>
<head>
<meta hhtp-equiv="Content Type" content="text/html; charset=utf-8" />
<title>KAYIT EKLE</title>
</head>
<body>
<form action="kayit.php?islem=ekle" method="POST">
ISIM: <input name="isim" type="text" id="isim" /><br />
YAS:  <input name="yas" type="text" id="yas" /><br />
ULKE: <input name="ulke" type="text" id="ulke" /><br />
<input name="KAYIT EKLE" type="submit" value="KAYIT EKLE" />
</form>
<?php
$baglanti = mysql_connect("localhost","root","12345");
mysql_select_db("test", $baglanti);
if(isset($_REQUEST["islem"])=="ekle"){
	if(mysql_query("INSERT INTO KAYIT(ISIM, YAS, ULKE)
	values(
	'".$_REQUEST["isim"]."',
        '".$_REQUEST["yas"]."',     
        '".$_REQUEST["ulke"]."'
)")) {
	echo "YENI KAYIT BASARIYLA ACILDI!";
}
	else {
		echo "KAYIT EKLEME ISLEMINDE SORUN YASANDI!";
}
}
?>
</body>
</html>

