<?php
session_start();
ini_set("display_errors", 0);
if($_SESSION["yetki"] == "admin") {
	header("locaiton: ozelsayfa.php");
}
else {
	echo "SISTEME GIRIS YETKINIZ BULUNMAMAKTADIR!";
}
?>
