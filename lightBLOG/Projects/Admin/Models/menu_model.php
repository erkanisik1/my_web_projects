<?php 

/**
* 
*/
class Menu_model extends Model{
	
	function menu_name_save($post){

		DB::insert('menuname',[
			'name' => $post['menu_name'],
			'nameSeo' =>seo($post['menu_name']),
		]);
		if(DB::affectedRows()){redirect('yonetim/menu');}
	}

	function menucat(){
		return DB::get('menucat')->result();
	}

	function pageInsert($post){
		
		foreach ($post as $key ) {
			$d = explode('&', $key['0']);
			DB::insert('menu',[
				'name' => $d['0'],
				'nameSeo' => seo($d['0']),
				'link' => $d['1'],
				'catID' => $post['menucat'],
			]);
		}

		output($post);
	}

}