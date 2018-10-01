<?php 
class User extends Controller{
	function main(){
		$data['uyelist'] = $this->uye_model->uyelistesi();
		import::view('uye',$data);
	}
	function duzenle($id){
		if(method::post()){
			$this->uye_model->duzenle_kayit(method::post());
		}
		$data['dzn'] = $this->uye_model->duzenle($id);
		import::view('uye_duzenle',$data);
	}
	function logout(){
		Session::deleteAll();
		redirect(baseUrl());
	}
}