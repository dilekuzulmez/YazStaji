//JQuery Document
$(document).ready(function() {
	$('#begen').click(function() {
		$('#durum').fadeIn(1000);
		var bekle="Islem tamamlaniyor...";
		$.ajax({
			cache:false,
			async:false,
			url:'like.php',
			success:function(e) {
				$('#sonuc').html(e);
				$('#durum').html(bekle);
				$('#durum').fadeOut(1000);
}
		});
	});
});
