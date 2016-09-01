<?php
header('Content-type: application/xml; charset=UTF-8');
echo "<?xml version='1.0' encoding='utf-8' ?>";

$baglanti = mysql_connect("localhost", "root", "12345") or die("hata1");
mysql_select_db("test", $baglanti) or die("hata2");
mysql_query("SET NAMES 'utf8'", $baglanti);

echo "<Veriler>";
$sql = mysql_query("SELECT * FROM veriler");
while($dizi = mysql_fetch_array($sql)) {
	echo "<Veri>";
	echo "<ID>".$dizi["id"]."</ID>";
	echo "<ISIM>".$dizi["isim"]."</ISIM>";
	echo "<ULKE>".$dizi["ulke"]."</ULKE>";
	echo "</Veri>";
}
echo "</Veriler>";

mysql_close($baglanti);
?>
