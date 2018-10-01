<?php 
class Content_model extends Model{

	function ekle($post){

		$seo = yFunc::seo($post['baslik']);
		DB::insert('icerik',[
		    'baslik'    => $post['baslik'],
		    'baslik_seo' => $seo,
		    'icerik' => $post['icerik'],
		    'anasayfa' => $post['anasayfa'],
		    'kategori_id' => $post['kategori'],
		    'keywords' => $post['keywords'],
		    'description' => $post['description'],
		    'onay' => '0',
		    'yazar' => Session::select('userid')		  
			]);
		if(DB::affectedRows()){redirect(baseUrl().'uye/icerik');}else{jalert(DB::error());}
	}

	function sayfalistesi(){
		return DB::select('icerik.id, icerik.isim, kategori.kategori')
		->where('icerikturu','sayfa')
		->innerJoin('kategori.id','icerik.kategori_id')
		->get('icerik')
		->result();
	}

	function iceriklistesi(){
		return DB::where('yazar',Session::select('userid'))
		->select('baslik,id,kategori_id,onay')		
		->orderBy('id','DESC')		
		->get('icerik')
		->result();
	}

	function duzenle_sec($post){ return DB::where('id',$post)->get('icerik')->row(); }

	function duzenle_kayit($post){
		$seo = yFunc::seo($post['baslik']);
		DB::where('id',$post['id'])->update('icerik',[
			'baslik'    => $post['baslik'],
		    'baslik_seo' => $seo,
		    'icerik' => $post['icerik'],
		    'anasayfa' => $post['anasayfa'],
		    'keywords' => $post['keywords'],
		    'description' => $post['description'],
			]);

		if(DB::affectedRows()){redirect(baseUrl().'uye/icerik');}
	}
}