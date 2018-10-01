$(function(){
	$('#kategori').change(function(){
		var kat = $('#kategori').val();
		if (kat == 0) {
			$('.kat').hide('500');
			$('.yenikategori').show('1000');
		}
	
	})
	
})