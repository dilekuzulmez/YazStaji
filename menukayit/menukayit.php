<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Menü Kayıt</title>
<style>
table{
    border:#808080 1px solid;
}
table th{
    border:#808080 thin solid;
    background-color:#FFDFAA;
    font-weight:bold;
    text-align:center;
}
table td{
    border:#808080 thin solid;
    padding:5px;
    background-color:#FFA;
}
</style>
</head>
 
<body>
<?php
//Güvenlik amaçlı kullanılan fonksiyon
function temizle($veri){
    $veri=trim($veri);
    $veri=stripslashes($veri);
    $veri=mysql_real_escape_string($veri);
    return $veri;
}
//----------------------------------------
 
require_once("baglan.php");
 
if (!$_POST){ // POST olayı yoksa yani sayfa ilk kez açılıyorsa 
    $menu="";
    $link="#";
    $sira=0;
    $mesaj="";
}
else{ // POST olayı varsa yani menü kaydı yapılmak isteniyorsa
    $durum=true;
    $mesaj="";
     
    $menu=temizle($_POST["menu"]);
    $link=temizle($_POST["link"]);
    $sira=(int)$_POST["sira"];
     
    if($menu==false){
        $durum=false;
        $mesaj.="Lütfen menü adı giriniz.";
    }
     
    if($durum==true){
        if(mysql_query("insert into menuler(menu, link, sira) values ('$menu','$link',$sira)")){
            $mesaj="<b>Menü başarıyla kaydedilmiştir. </b>";
            $menu="";
            $link="#";
            $sira=0;
        }
        else{
            $mesaj="<b>Hata:</b> ".mysql_error();
        }
    }
}
 
echo "<p><a href=\"index.php\">Ana Sayfa</a> | $mesaj</p>";
?>
<form name="form1" method="post" action="menukayit.php">
<table width="250">
    <tr>
        <th>Menü:</th><td><input type="text" name="menu" value="<?php echo $menu; ?>" />*</td>
    </tr>
    <tr>
        <th>Link:</th><td><input type="text" name="link" value="<?php echo $link; ?>" /></td>
    </tr>
    <tr>
        <th>Sıra:</th><td><input type="text" name="sira" value="<?php echo $sira; ?>" /></td>
    </tr>
    <tr>
        <th>&nbsp;</th><td><input type="submit" name="kaydet" value="Kaydet" /></td>
    </tr>
</table>
</form>
<br>
<table>
<tr>
<th>No</th><th>Menü</th><th>Link</th><th>Sıra</th>
</tr>
<?php
$sonuc=mysql_query("select * from menuler order by sira asc");
while($menu=mysql_fetch_array($sonuc)){
    echo "<tr>";
    echo "<td>".$menu["id"]."</td>";
    echo "<td>".$menu["menu"]."</td>";
    echo "<td><a href=\"".$menu["link"]."\">".$menu["link"]."</a></td>";
    echo "<td>".$menu["sira"]."</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
