<?php 

/**
* 27102017 01:35
*/
class Tamir extends Controller{
	
	function main(){
		$data['liste'] = DB::where('uyeID', Session::select('userid'))->get('tamir')->result();
		import::view('tamir/tamir',$data);
	}
}