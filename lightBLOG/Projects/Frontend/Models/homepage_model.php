<?php 
	class Homepage_model extends Model{

		function content($limit='5' ){
			return DB::where('status','1')->orderBy('id','desc')->limit(NULL, $limit)->get('content')->result();
			}


		function category($post = ''){
			if($post){
				return DB::where('category',$post)->get('content')->result();
			}else{
				return DB::get('category')->result();
			}
		}

		function konu($id){
			$id = explode('-',$id);
			
			if (session::select('konuid') != $id['0']) {
				DB::where('id',$id['0'])->increment('content', 'hit'); 	
			 }else{session::insert('konuid',$id['0']);}
			
			return DB::where('id',$id['0'])->get('content')->row();
		}

		function ara($post){
			$k = 'Arama bölümünden <b>'.$post.'</b> kelimesi aratıldı';
			DB::insert('log',['log' => $k,'bolum'=>'arama']);
			return DB::where('baslik like',DB::like($post,'inside'),'or')
			->where('content like',DB::like($post,'inside'))
			->get('content')
			->result();
		}
	}