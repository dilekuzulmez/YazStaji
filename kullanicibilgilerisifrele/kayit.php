<?php include("config.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />
<title> KULLANICI KAYIT </title>
</head>

<body>
<form action="kayit.php?islem=kayit" method="POST">
Kullanici adinizi giriniz: <input name="kullaniciadi" type="text" id="kullaniciadi" /><br />
Sifrenizi giriniz: <input name="sifre" type="password" id="sifre" /><br />
<input name="Gonder" type="submit" value="Kayit islemini tamamla" />
</form>

<?php
if(isset($_REQUEST["islem"])=="kayit") {
	if(!$_REQUEST["kullaniciadi"] || !$_REQUEST["sifre"]) {
	echo "Form alanlarini doldurunuz!";
	}
	else {
	if(mysql_query("INSERT INTO kullanicilar(
	KULLANICIADI,
	SIFRE
	)
	values(
	'".$_REQUEST["kullaniciadi"]."',
	'".md5($_REQUEST["sifre"])."'
	)"
	)) {
		echo "Kullanici kaydi basariyla tamamlanmistir.<br>";
		echo "Kayit oldugunuz bilgileri kullanarak sisteme giris yapınız.";
	}
   }
}
?>
</body>
</html>
