<?php

class Home extends Controller{	
	function main(){	
     
     //$data['bitonay'] = DB::where('durum','0')->get('ilan')->result();
   	Import::view('index');
	}

}