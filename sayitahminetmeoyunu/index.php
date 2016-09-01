<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sayi Tahmin Etme Oyunu</title>
</head>
<body>
<form action="index.php?islem=sonuc" method="POST">
1 ile 10 arasindan bir sayi tahmin et ??? <br>
<input name="sayi" type="text"><br>
<input name="Gonder" type="submit" value="Tahmin Baslat">
</form>
<?php if(isset($_REQUEST["islem"])=="sonuc") include("tahmin.php")?>
</body>
</html>
