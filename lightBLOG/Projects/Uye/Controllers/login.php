<?php 
class Login extends Controller{

	public function main(){

		if(Method::post()){$login = $this->uye_model->login(Method::post());}

		Import::view('login');
	}

	function yeni(){
		if (method::post()) {$this->uye_model->kayit(method::post());}
		import::view('uye/yeni');
	}

	function cikis(){
		Session::deleteAll();
		redirect(baseUrl());
	}

	function aktivizasyon($d){
		
		DB::where('rnd',$d)->update('kullanici',['rnd' => '','durum' => '1',]);
		if (DB::affectedRows()){import::view('uye/finis');}else{
			redirect(baseUrl());
		}
	}
	function sifremi_unuttum(){

		if(method::post('login')){

			$this->uye_model->sifremi_unuttum(method::post());

		}

		import::view('uye/sifremi_unuttum');

	}

}