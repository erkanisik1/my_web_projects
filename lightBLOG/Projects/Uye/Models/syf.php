<?php 

	
	class Syf extends Model{
		
	public	function ekle($post){
		$seo = Myfunc::seo($post['baslik']);
			DB::insert('icerik',
			[
			    'baslik'    => $post['baslik'],
			    'baslikseo' => $seo,
			    'icerik' => $post['icerik'],
			    'icerikturu' => $post['tur'],

			  
			]);
		}

	function sayfalistesi(){
		return DB::get('icerik')->WHERE('icerikturu','sayfa')->result();
	}

	function duzenle_sec($post){
		return DB::get('icerik')->WHERE('id',$post)->row();
	}
	}