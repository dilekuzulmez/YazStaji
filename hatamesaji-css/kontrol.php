<?php
$veri = $_REQUEST["kullaniciadi"];
switch($veri) {
	case "":
		header("Location: form.php?sonuc=eksik");
		break;
	 case "dilek":
                header("Location: form.php?sonuc=dogru");
                break;
	 default:
                header("Location: form.php?sonuc=hata");
                break;

}
