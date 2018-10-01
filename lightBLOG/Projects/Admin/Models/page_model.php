<?php 

	class Page_model extends Model{

		

		function insert($post){
			$seo = seo($post['title']);
			DB::insert('page',[
			    'title'    => $post['title'],
			    'titleSeo' => $seo,
			    'content' => $post['content'],
			]);
		}



	function sayfalistesi(){return DB::get('page')->result();}



	function duzenle_sec($post){

		return DB::get('icerik')->WHERE('id',$post)->row();

	}

	}