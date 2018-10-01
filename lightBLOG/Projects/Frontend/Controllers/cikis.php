<?php 
class Cikis extends Controller{
	
	function main()
	{
		Session::deleteAll();
		redirect(baseUrl());
	}
}

 ?>