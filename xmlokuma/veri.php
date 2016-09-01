<?php
$myXML = simplexml_load_file ( 'uyeler.xml' );

foreach ( $myXML->children() as $uyeler ) {
    $uye = array (
	'id'  => $uyeler->attributes()->id
    );
    print '<br>Uye ID=<b>'.$uye['id']."</b><br>";
    foreach ($uyeler->children() as $uye=>$i) {
	print '-'.$uye.'=<b>'.$i."</b><br>";
    }
}
?>
