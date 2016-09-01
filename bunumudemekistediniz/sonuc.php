<?php
$aranan = $_POST["aranan"];

$veritabani = array(
	'php',
	'asp',
	'fuzuli',
	'.net',
	'jsp',
	'java',
	'javascript',
	'html',
	'c',
	'css',
	'xml',
	'jquery',
	'c#',
	'c++',
	'ruby',
	'delphi',
	'basic',
	'qbasic',
	'sql'
);

$yakinlik = -1;

foreach($veritabani as $veritabaniElemani) {
	$benzerlik = levenshtein($aranan, $veritabaniElemani);
	if($benzerlik == 0) {
		$x = $veritabaniElemani;
		$yakinlik = 0;
	}
	if($benzerlik <= $yakinlik || $yakinlik < 0) {
		 $x = $veritabaniElemani;
                 $yakinlik = $benzerlik;
	}
}

print "Aranan Kelime: ".$aranan."<br>";
if($yakinlik == 0) {
	print "Zaten ".$x." kelimesini aramistiniz. :)";
} else {
	print "Bunu mu demek istediniz ? ".$x;
}
?>
