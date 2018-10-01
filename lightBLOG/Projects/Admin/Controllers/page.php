<?php 



	class Page extends Controller{

		function main(){

			$data['sayfa'] = $this->page_model->sayfalistesi();

			Import::view('page/page',$data);

		}



		function newpage(){

			if(Method::post()){$this->page_model->insert(Method::post());}

			Import::view('page/newpage');

		}



		function duzenle($id){

			$data['dzn'] = $this->page_model->duzenle_sec($id); 

			Import::view('page/sayfa_duzenle',$data);

		}

	}