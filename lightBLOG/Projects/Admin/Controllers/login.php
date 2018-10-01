<?php 
class Login extends Controller{

	function main(){
		if(Method::post()){$this->user_model->login(Method::post());}
		Import::view('login');
	}

	function cikis(){
		Session::deleteAll();
		redirect(baseUrl());
	}
}