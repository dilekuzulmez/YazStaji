<?php
$host="localhost";
$user="root";
$password="12345";
$db="test";
  
if(@!mysql_connect($host, $user, $password)){
   $mesaj="Veritabanı bağlantısı yapılamadı!<br>";
   $mesaj.="Hata açıklaması: ".mysql_error();
   die($mesaj);
}
  
if(@!mysql_select_db($db)){
   $mesaj="$veritabani veritabanı seçilemedi!<br>";
   $mesaj.="Hata açıklaması: ".mysql_error();
   die($mesaj);
}
?>
