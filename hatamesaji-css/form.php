<html>
<head>
<meta http-equiv="Content-Type" content="text/html"; charset=utf-8" />
<title> YONETIM PANELINE GIRIS </title>
<link href="mesaj.css" rel="stylesheet" type="text/css">
</head>
<body>
<form action="kontrol.php" method="POST">
Kullanici adinizi giriniz...<br/>
<input name="kullaniciadi" type="text" id="kullaniciadi" /><br>
<input name="Gonder" type="submit" value="Kullanici Adini Gonder">
</form>
<?php if(isset($_REQUEST["sonuc"])) { ?>
<?php if($_REQUEST["sonuc"]=="hata") { ?>
<div id="hata">Lutfen dogru kullanici adini giriniz!</div>
<?php } ?>
<?php if($_REQUEST["sonuc"]=="eksik") { ?>
<div id="eksik">Lutfen bir kullanici adini giriniz!</div>
<?php } ?>
<?php if($_REQUEST["sonuc"]=="dogru") { ?>
<div id="dogru">Kullanici adini dogru girdiginiz icin tesekkur ederiz...</div>
<?php } ?>
<?php } ?>
</body>
</html>




