<?php 
/**
* Created By  : Erkan IŞIK
* Created Date: 14-01-2018
* Update Date : 14-01-2018
*/

class Kategori_model extends Model{

	function kategoriEkle($post){
			DB::insert('kategori',[
			    'ust_kategori_id'    => $post['ustkategori'],
			    'kategori' => $post['kategori'],
			    'kat_seo' => seo($post['kategori'])
			]);
			if (DB::affectedRows()) {
				redirect('yonetim/kategori');
			}
		}

	function kategori_duzenle($post){return DB::where('id',$post)->get('kategori')->row();}

	function kategoriguncelle($post){
		DB::where('id',$post['id'])->update('kategori',[
			'ust_kategori_id' => $post['ust_kategori_id'],
			'kategori' => $post['kategori'],
			'durum' => $post['durum']
		]);
		if(DB::affectedRows()){redirect('yonetim/kategori');}
	}

	
}