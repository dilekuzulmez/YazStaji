<?php
session_start();
$kullaniciadi = $_REQUEST["kullaniciadi"];
$sifre = $_REQUEST["sifre"];
if(($kullaniciadi == "dilek") && ($sifre == "12345")) {
        $_SESSION["yetki"] = "dilek";
        header("location: ozelsayfa.php");
}
else {
        header("location: guvenlik.php");               
}

?>

