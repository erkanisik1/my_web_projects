<?php 
/**
* 27102017 02:57
*/
class Duyuru_model extends Model{
	
	function liste(){
		return DB::get('duyuru')->result();
	}

	function yeni($post){
		DB::insert('duyuru',[
			'duyuru' => $post['duyuru'],
			'durum' => '1'
		]);
		if (DB::affectedRows()) {
			redirect(baseUrl('yonetim/duyuru'));
		}
	}

function duzenle($post){
	return DB::where('id',$post)->get('duyuru')->row();
}


function duzenlekaydet($post){
DB::where('id',$post['id'])->update('duyuru',[
			'duyuru' => $post['duyuru'],
			'durum' => $post['durum']
		]);
		if (DB::affectedRows()) {
			redirect(baseUrl('yonetim/duyuru'));
		}
}




}