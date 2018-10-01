<?php

/**
* 
*/
class Konu_model extends Model{
	
	function yorumekle($post){
		$konu_id = explode('-', $post['konu_id']);
		DB::insert('yorum',[
			'isim' => $post['isim'],
			'mail' => $post['mail'],
			'mesaj' => $post['mesaj'],
			'konu_id' => $konu_id['0'],
			'currentdate' => $post['currentdate'],
		]);
		if (DB::affectedRows()) {
			jalert('Yorumunuz onaylandıktan sonra yayına girecektir..');
			git('konu/'.$post['konu_id']);


		}
	}
}