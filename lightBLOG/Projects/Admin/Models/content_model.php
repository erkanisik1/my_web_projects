<?php 

class Content_model extends Model{
	
	function content_new($post){

		if(Session::select('userid') == '66'){$status = '1';}else{$status = '0';}
		
		DB::insert('content',[
		    'title'    		=> $post['title'],
		    'title_seo' 	=> seo($post['title']),
		    'content' 		=> $post['content'],
		    'homepage' 		=> $post['homepage'],
		    'category'		=> $post['kategori'],
		    'keywords'		=> $post['keywords'],
		    'description' 	=> $post['description'],
		    'author' 		=> Session::select('userid'),
		    'status'		=> $status,  
			]);
		
		if(DB::affectedRows()){redirect(baseUrl().'admin/content');}
	}
	
	function content_list(){
		return DB::orderBy('id','DESC')
		->get('content')
		->result();
	}

	function content_edit($post){ return DB::where('id',$post)->get('content')->row(); }

	function content_update($post){
		$seo = yFunc::seo($post['baslik']);
		DB::where('id',$post['id'])->update('content',[
			'title'    => $post['baslik'],
			'category' => $post['kategori'],
		    'title_seo' => $seo,
		    'content' => $post['icerik'],
		    'homapage' => $post['anasayfa'],
		    'keywords' => $post['keywords'],
		    'description' => $post['description'],
			]);

		if(DB::affectedRows()){redirect(baseUrl().'admin/content');}
	}

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
}