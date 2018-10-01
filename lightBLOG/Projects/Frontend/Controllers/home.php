<?php
class Home extends Controller{	
	function main(){

		$data['icerik'] = $this->homepage_model->content();   
		Import::view(THEME.'index',$data);
	}	

	function show404(){import::view(THEME.'show404');
}

}

