<?php //Veritabanina baglanti saglanan sayfa
$conn=mysql_connect("localhost","root","12345") or die("Erisim Hatasi");
mysql_query("SET NAMES 'utf8'") or die("Veritabani Hatasi");
mysql_query("SET CHARACTER SET utf8");
mysql_query("SET COLLACTION_CONNECTION = 'utf8_general_ci'");
mysql_select_db("test", $conn);
?>
