<?php
session_start(); //oturum tasiniyor.
unset($_SESSION["yetki"]); //tasinan oturum sonlandiriliyor.
header("location: giris.html");
?>
