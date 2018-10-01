<?php 

/**
* 
*/
class Test extends Controller{
	
	function main(){
		$url= 'https://www.doviz.com/api/v1/currencies/all/latest';
		$cek = CURL::init()
		->option('url', $url)
		->option('sslVerifypeer', TRUE)
		->option('returnTransfer', TRUE)
		->option('followLocation', TRUE)
		->exec();
		$doviz = json_decode($cek);
		//$dolar = $doviz['0'];
		

		//echo $dolar->selling;
 
	}
}