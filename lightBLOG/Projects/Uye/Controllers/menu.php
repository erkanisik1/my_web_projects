<?php 

class Menu extends Controller{
	
	function main()
	{
		if(method::post('popup')){
			
			$this->yonetim->menu_name_save(method::post());
		}

		if(method::post('yazi_submit')){
			output(method::post());
		}
		import::view('menu');
	}
}