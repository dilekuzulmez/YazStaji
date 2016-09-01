<?php

$dosya="kayit.txt";

$d = fopen($dosya, r);
$bilgi = fread($d, filesize($dosya)); 
$yeni= $bilgi+1;
fclose($d);

if($d = fopen($dosya, w))
{
    fwrite($d, $yeni);    
    fclose($d);
}else{
    print "Ftp ile dosyaya sağ tıklayıp 777 yapın";
}

print $yeni;
    
?>
