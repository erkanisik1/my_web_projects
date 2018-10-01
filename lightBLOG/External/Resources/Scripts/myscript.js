$(function(){
	// Güncel Zamanı Alıyoruz
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var saat = today.getHours()+':'+today.getMinutes()+':'+today.getSeconds();
	var yyyy = today.getFullYear();
	if(dd<10){date='0'+dd;}else{date = dd;} 
	if(mm<10){month='0'+mm;}else{month=mm;} 
	var today = date+'-'+month+'-'+yyyy+' '+saat;
	document.getElementById("currentDate").value = today;
	// /Güncel Zamanı Alıyoruz

	
})