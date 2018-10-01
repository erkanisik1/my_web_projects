<?php 



class Menu extends Controller{

	

	function main()

	{

		if(method::post('popup')){$this->menu_model->menu_name_save(method::post());}



		if(method::post('yazi_submit')){output(method::post());	}
		if(method::post('page_submit')){$this->menu_model->pageInsert(method::post());	}	
			$data['menucat'] = $this->menu_model->menucat();

		import::view('menu/index',$data);

	}

}