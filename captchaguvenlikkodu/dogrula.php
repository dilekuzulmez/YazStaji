<?php
session_start();
if(isset($_REQUEST["captcha"]) && $_REQUEST["captcha"] !=""&&$_SESSION["captcha"] == $_REQUEST["captcha"]){
	echo "Bilgi Dogru :)";
}
else{
 echo "Yanlis kod girdiniz!";
}
?>
