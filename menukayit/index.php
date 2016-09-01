<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ana Sayfa</title>
<style>
body{
    margin:10px;
}
.menu{
    display:inline-block;
    border:#FF5FAA thin solid;
    background-color:#FFDFFF;
    font-family:Tahoma, Geneva, sans-serif;
    font-weight:bold;
    margin-left:3px;
    padding:5px 10px;
    /*width:150px;*/
    text-decoration:none;
    text-align:center;
}
.menu:hover{
    background-color:#D41FAA;
    color:#FFF;
}
</style>
</head>
 
<body>
<?php
require_once("baglan.php");
$sonuc=mysql_query("select * from menuler order by sira asc");
while($menu=mysql_fetch_array($sonuc)){
    echo "<a href=\"".$menu["link"]."\" class=\"menu\">".$menu["menu"]."</a>";
}
?>
<a href="menukayit.php" style="margin-left:10px"><img src="add.png" border="0" align="absmiddle"></a>
</body>
</html>
