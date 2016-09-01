<html>
<head>
<meta hhtp-equiv="Content Type" content="text/html; charset=utf-8" />
<title>KAYIT EKLE</title>
</head>
<body>
<?php
$baglanti = mysql_connect("localhost","root","12345");
mysql_select_db("test", $baglanti);
$SQL = mysql_query("SELECT * FROM KAYIT ORDER BY ID ASC");
while($dizi = mysql_fetch_array($SQL)) {
	echo "ID: ".$dizi["ID"]."-";
        echo "ISIM: ".$dizi["ISIM"]."-";
        echo "YAS: ".$dizi["YAS"]."-";
        echo "ULKE: ".$dizi["ULKE"]."<br>";
}
?>
</body>
</html>

