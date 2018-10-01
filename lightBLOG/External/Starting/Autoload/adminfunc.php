<?php 

function theme_list(){
	
	return Folder::files('Projects/Frontend/Views/');
}

function menuname(){

  return DB::orderBy('name','asc')->get('menucat')->result();

}

function pagelist(){

  return DB::orderBy('title','asc')->get('page')->result();

}

function sifreuret($uzunluk){
			$pwd = '';
			if(!is_numeric($uzunluk) || $uzunluk <= 0){$uzunluk = 8; }
			if($uzunluk  > 32){$uzunluk = 32;}
			$karakter = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			mt_srand(microtime() * 1000000);
			for($i = 0; $i < $uzunluk; $i++){
				$key = mt_rand(0,strlen($karakter)-1);
				$pwd = $pwd . $karakter{$key};
			}
			for($i = 0; $i < $uzunluk; $i++){
				$key1 = mt_rand(0,strlen($pwd)-1);
				$key2 = mt_rand(0,strlen($pwd)-1);
				$tmp = $pwd{$key1};
				$pwd{$key1} = $pwd{$key2};
				$pwd{$key2} = $tmp;
			}
			return $pwd;
		}// şifreüret

function category_list(){
	return DB::get('category')->result();
}

function category_name($id){
	return DB::select('name')->where('id',$id)->get('category')->value();
}
