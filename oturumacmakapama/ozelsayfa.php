<?php
session_start();
ini_set("display_errors", 0);
if($_SESSION["yetki"] == "dilek") {
	echo "Yetkiniz bulunmaktadir.<br>";
	echo "Size ozel alana hosgeldiniz :<br>";
	echo "<a href='cikis.php'>Cikis Yap</a>";
}
else{
	header("location: guvenlik.php");
}
?>
