<?php 
class Crk extends Model{
	
	function sayfalistesi(){
		return DB::select('icerik.id, icerik.isim, kategori.kategori')
		->where('icerikturu','sayfa')
		->innerJoin('kategori.id','icerik.kategori_id')
		->get('icerik')
		->result();
	}

	
}