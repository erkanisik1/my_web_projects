<?php
class Kategori extends Controller
{	
   
    public function main(){	
    	  
   		Import::view('kategori');
	}

	function yeni(){
		if (Method::post()) {
			$this->yonetim->kategoriEkle(Method::post());
		}
		Import::view('kategori_yeni');
	}
	
	function duzenle($id){
		if (Method::post()) {
			$this->yonetim->kategoriguncelle(Method::post());
		}
		$data['duzenle'] = $this->yonetim->kategori_duzenle($id);
		Import::view('kategori_duzenle',$data);
	}

	function sil($id){
		echo $id;
	}

}