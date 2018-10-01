<?php 
class Konu extends Controller{
	function main($id){
		if (method::post()) {
			$this->konu_model->yorumekle(method::post());
		}

		$data['icerik'] = $this->anasayfa->konu($id);
		define('title',$data['icerik']->baslik); 
		define('keywords',$data['icerik']->keywords);
		if($data['icerik']->description){
			define('desc',$data['icerik']->description);
		}else{
			define('desc',Afunc::kelimedenbol($data['icerik']->icerik,'150'));
		}
		define('img',Afunc::resimgoster($data['icerik']->icerik));
		define('link', baseUrl('/konu/'.$data['icerik']->id.'-'.$data['icerik']->baslik_seo.'.html'));
		Import::view(TEMA.'icerik',$data);

	}

}



