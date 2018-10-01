<?php 
function ilankategori(){
	return DB::get('ilankategori')->result();
}

function resim($id,$adet = '1'){
	return DB::select('link')->limit(null,$adet)->where('ilanid',$id)->get('ilanresim')->value();
}

function resimler($id){
	return DB::where('ilanid',$id)->get('ilanresim')->result();
}