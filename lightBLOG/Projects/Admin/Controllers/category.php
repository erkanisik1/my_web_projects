<?php
class Category extends Controller
{	
   
    public function main(){	
    	  
   		Import::view('kategori/index');
	}

	function yeni(){
		if (Method::post()) {$this->kategori_model->kategoriEkle(Method::post());}
		$data['list'] = DB::get('kategori')->result();
		Import::view('kategori/kategori_yeni');
	}
	
	function duzenle($id){
		if (Method::post()) {$this->kategori_model->kategoriguncelle(Method::post());}
		$data['duzenle'] = $this->kategori_model->kategori_duzenle($id);
		Import::view('kategori/kategori_duzenle',$data);
	}

	function sil($id){
		
	}

}