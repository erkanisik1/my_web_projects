<?php 

	class Members extends Controller{
		function main(){
			$data['uyelist'] = $this->uye_model->uyelistesi();
			import::view('uye',$data);
		}


	function edit(){
		
		if(method::post()){$this->uye_model->duzenle_kayit(method::post());}

		$data['dzn'] = $this->uye_model->duzenle(Session::select('userid'));

		import::view('uye/uye_duzenle',$data);
	}

	function sifremi_unuttum(){

		if(method::post('login')){$this->uye_model->sifremi_unuttum(method::post());}
		import::view('uye/sifremi_unuttum');
	}

	function aktivizasyon($d){
		DB::where('rnd',$d)->update('kullanici',['rnd' => '','durum' => '1',]);
		if (DB::affectedRows()) {import::view('uye/finis');}
	}
}