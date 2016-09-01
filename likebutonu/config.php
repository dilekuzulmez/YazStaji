<?php
$baglanti = mysql_connect("localhost", "root", "12345") 
	or die("error1");
mysql_query("SET NAMES 'utf8'") 
	or die("error2");
mysql_select_db("test", $baglanti);
?>
