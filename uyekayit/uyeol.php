<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üye Kayıt</title>
<style>
.sutun1{
    text-align:right;
    background-color:#D4FFAA;
    padding-right:3px;
}
 
.sutun2{
    background-color:#FFC;
    padding-left:3px;
}
table{
    border:#999 thin solid;
}
</style>
</head>
 
<body>
<?php
function temizle($veri){
    $veri=trim($veri);
    $veri=stripslashes($veri);
    $veri=mysql_real_escape_string($veri);
    return $veri;
}
 
function bosmu($dizi){
    foreach($dizi as $deger){
        if($deger==false) // değer boş ise false olumsuz cevabını gönder.
            return false;
    }
    return true; // bu kısma geldi ise boş değer yoktur. true olumlu cevabını gönder.
}
 
function uyevarmi($kullaniciadi){
    $sonuc=mysql_query("select * from uyeler where kullaniciadi='$kullaniciadi'");
    $kayit=mysql_fetch_array($sonuc);
    if($kayit) // kayit var ise var anlamında true gönder
        return true;
    else // kayıt yok ise yok anlamında false gönder
        return false;
}
 
if($_POST){ // POST olayı varsa
    require_once("baglan.php"); // veritabanına bağlan
    mysql_query("set names utf8");
 
//POST ile gelen değerleri al
    $adisoyadi=temizle($_POST["adisoyadi"]);
    $kullaniciadi=temizle($_POST["kullaniciadi"]);
    $email=temizle($_POST["email"]);
    if(isset($_POST["emailigizle"])==false)
        $emailigizle="h";
    else
        $emailigizle=temizle($_POST["emailigizle"]);
    $sifre=$_POST["sifre"];
    $tekrarsifre=$_POST["tekrarsifre"];
    $cinsiyeti=temizle($_POST["cinsiyeti"]);
    $gun=(int)$_POST["gun"];
    $ay=(int)$_POST["ay"];
    $yil=(int)$_POST["yil"];
    $dogumtarihi=date("Y-m-d",mktime(0,0,0,$ay,$gun,$yil));
    $uyeliktarihi=date("Y-m-d");
    $songiristarihi=date("Y-m-d");
//---------------------------------------------------------
    $durum=true; // olumsuz bir durum olup olmadığı bu değişken ile kontrol edilecek
    $mesaj="";
     
    // bosmu fonksiyonuna, boş olmasını istemediğimiz değerleri bir dizi olarak gönderiyoruz
    if(bosmu(array($adisoyadi,$kullaniciadi,$email,$sifre,$tekrarsifre,$gun,$ay,$yil))==false){
        $durum=false;
        $mesaj.="Lütfen gerekli alanları boş bırakmayınız!<br>";
    }
    if($durum==true and uyevarmi($kullaniciadi)){ // kullanıcı kayıtlı mı?
        $durum=false;
        $mesaj.="Yazdığınız kullanıcı adı kullanılıyor! Lütfen başka bir kullanıcı adı yazınız.<br>";
    }
    if($durum==true and $sifre!=$tekrarsifre){ // şifreler farklı mı?
        $durum=false;
        $mesaj.="Yazdığınız şifreler farklı! Lütfen tekrar giriniz.";
    }
    if($durum==true){ // herşey olumlu ise kayıt işlemine geç
        $sifrelisifre=sha1($sifre);
        $sql="insert into uyeler(adisoyadi, kullaniciadi, email, emailigizle, sifre, cinsiyeti, dogumtarihi, uyeliktarihi, songiristarihi)";
        $sql.="values ('$adisoyadi', '$kullaniciadi', '$email', '$emailigizle', '$sifrelisifre', '$cinsiyeti', '$dogumtarihi', '$uyeliktarihi', '$songiristarihi')";
        if (mysql_query($sql)){
         $mesaj="<b>Kaydınız başarı ile yapılmıştır.</b><br><a href=\"index.php\">Ana Sayfa</a>";
      }
      else{ // kayıt işlemi yapılamazsa
         $durum=false;
         $mesaj="<b>Hata:</b> ".mysql_error();
      } 
    }
     
}
else{ // POST olayı yoksa sayfa ilk kez açılıyorsa
//-------------ilk değerler atanıyor---------------------------------------
    $adisoyadi="";
    $kullaniciadi="";
    $email="";
    $emailigizle="h";
    $sifre="";
    $tekrarsifre="";
    $cinsiyeti="e";
    $gun=0;
    $ay=0;
    $yil=0;
    $durum=false;
    $mesaj="";
}
 
// tüm form yapısı bu if içerisindedir. 
// durum false ise yani kayıt işlemi yapılmadı ise formu tekrar göstermek için
if($durum==false){
?>
<form name="form1" method="post" action="uyeol.php">
<table border="0" cellspacing="0" cellpadding="2">
  <tr>
    <td class="sutun1">Adı Soyadı:</td>
    <td class="sutun2">
      <input name="adisoyadi" type="text" size="35" maxlength="30" value="<?php echo $adisoyadi; ?>" />*</td>
  </tr>
  <tr>
    <td class="sutun1">Kullanıcı Adı:</td>
    <td class="sutun2"><input type="text" name="kullaniciadi" maxlength="15" value="<?php echo $kullaniciadi; ?>" />*</td>
  </tr>
  <tr>
    <td class="sutun1">E-mail:</td>
    <td class="sutun2"><input name="email" type="text" size="35" maxlength="30" value="<?php echo $email; ?>" />*</td>
  </tr>
  <tr>
    <td class="sutun1">E-maili Gizle:</td>
    <td class="sutun2"><input type="checkbox" name="emailigizle" value="h" <?php echo ($emailigizle=="e")?"checked":""?> /></td>
  </tr>
  <tr>
    <td class="sutun1">Şifre:</td>
    <td class="sutun2"><input type="password" name="sifre" value="<?php echo $sifre; ?>" />*</td>
  </tr>
  <tr>
    <td class="sutun1">Tekrar Şifre:</td>
    <td class="sutun2"><input type="password" name="tekrarsifre" value="<?php echo $tekrarsifre; ?>" />*</td>
  </tr>
  <tr>
    <td class="sutun1">Cinsiyeti:</td>
    <td class="sutun2">
        <input type="radio" name="cinsiyeti" value="e" <?php echo ($cinsiyeti=="e")?"checked":""?> />Erkek 
        <input type="radio" name="cinsiyeti" value="k" <?php echo ($cinsiyeti=="k")?"checked":""?> />Kadın
    </td>
  </tr>
  <tr>
    <td class="sutun1">Doğum Tarihi:</td>
    <td class="sutun2">
    <?php
    echo "<select name=\"gun\">";
    echo "<option value=\"0\">Gün</option>";
    for($i=1;$i<=31;$i++)
        echo "<option value=\"$i\"".(($gun==$i)?" selected":"").">$i</option>";
    echo "</select> ";
     
    echo "<select name=\"ay\">";
    echo "<option value=\"0\">Ay</option>";
    for($i=1;$i<=12;$i++)
        echo "<option value=\"$i\"".(($ay==$i)?" selected":"").">$i</option>";
    echo "</select> ";
 
    echo "<select name=\"yil\">";
    echo "<option value=\"0\">Yıl</option>";
    for($i=date("Y")-70;$i<=date("Y")-10;$i++)
        echo "<option value=\"$i\"".(($yil==$i)?" selected":"").">$i</option>";
    echo "</select>";
    ?>*
    </td>
  </tr>
  <tr>
    <td class="sutun1">&nbsp;</td>
    <td class="sutun2"><input type="submit" name="kaydet" value="Kaydet"></td>
  </tr>
</table>
</form>
<?php
} // formu kapsayan if yapısının kapanışı
echo "<p>$mesaj</p>"; // oluşturulan mesajı yazdır. (Olumlu yada olumsuz)
?>
</body>
</html>
