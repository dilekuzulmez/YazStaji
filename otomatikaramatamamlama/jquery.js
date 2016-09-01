//Kullanici tarafindan arama formuna girilen veriyi jquery.js dosyasi araciligiyla arama.php sayfasina POST etme

$(document).ready(function() { //kodlari baslatma
$('#dil').keyup(function() { //Eger id degeri dil olan form alanina klavye araciligiyla yazi girilmeye baslandigi anda bu kod blogunu calistirir.
	var dil = $("#dil").val(); //id degeri dil olan form alanina value degerini dil degiskenine tanimlama.
	$("#bekle").show(); //id degeri bekle olan HTML nesnelerinin gorunurlugunu aktif yapma
	$("#kapat").show(); //id degeri kapat olan HTML nesnelerinin gorunurlugunu aktif yapma
	$.ajax({
		url:"arama.php", //form alanindan gelen veriler arama.php'e gonderilecek.
		data:"dil="+dil, //veriler, arama.php?dil={girilen veri} seklinde bir URL uzerinden gonderilecek.
		type:'post', //veri gonderme POST metoduyla gerceklestirilecek.
		cache:false,
		async:false,
	success:function(e) { //arama tamamlama isleminin basarili olmasi durumunda id degeri bekle olan div icerisine arama.php sayfasindan donen cevap yazdırılır
			$('#bekle').html(e);
		},
		error:function() {  //arama tamamlama isleminin basarisiz olmasi durumunda ekrana bir pencere acilmak suretiyle mesaj bastirilicak.
			alert("Bazi beklenmedik problemler meydana geldi!");
		}
 });
});
});

