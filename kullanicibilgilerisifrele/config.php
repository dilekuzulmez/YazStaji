<?php
ini_set('display_errors', 0);
$baglanti = mysql_connect("localhost", "root", "12345")
	or die("hata1");
mysql_select_db("test", $baglanti)
	or die("hata2");
?>
