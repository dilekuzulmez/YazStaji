<?php include("config.php"); ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />
<title> KULLANICI GIRIS </title>
</head>

<body>
<form action="giris.php?islem=giris" method="POST">
Kullanici adinizi giriniz: <input name="kullaniciadi" type="text" id="kullaniciadi" /><br />
Sifrenizi giriniz: <input name="sifre" type="password" id="sifre" /><br />
<input name="Gonder" type="submit" value="Giris Yap" />
</form>

<?php
if(isset($_REQUEST["islem"])=="giris") {
        if(!$_REQUEST["kullaniciadi"] || !$_REQUEST["sifre"]) {
	        echo "Form alanlarini doldurunuz!";
        }
        else {
        if(mysql_result(mysql_query("select SIFRE from kullanicilar where KULLANICIADI = '".$_REQUEST["kullaniciadi"]."'"),0,'SIFRE') == md5($_REQUEST["sifre"])) {
		echo "Giris Basarili :)";
	
	}
	else {
		echo "Giris Basarisiz!";
	}
    }
}
?>
</body>
</html>
