<?php
include("config.php");

mysql_query("UPDATE FacebookLike SET ToplamBegenilme = ToplamBegenilme + 1 WHERE StatusId = '1'");

echo "Toplam: ".mysql_result(mysql_query("SELECT ToplamBegenilme FROM FacebookLike WHERE StatusId = '1'"),0,'ToplamBegenilme');
?>
