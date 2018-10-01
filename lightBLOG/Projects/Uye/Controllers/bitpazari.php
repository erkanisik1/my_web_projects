<?php 

/**
* 29102017 13:41
*/
class Bitpazari extends Controller{
	
	function main(){
		
		$data['list'] = DB::where('user_id',Session::select('userid'))->get('ilan')->result();

		import::view('bitpazari/index',$data);
	}

	function yeni(){
		
		if (method::post()) {$this->bitpazari_model->yeni(method::post());}
	import::view('bitpazari/yeni');	
	}


	function duzenle($id){
		$data['dzn'] = $this->bitpazari_model->duzenle($id);
		import::view('bitpazari/duzenle',$data);	
	}

	function sil($id){
		DB::where('id',$id)->delete('ilan');
		$resimlink = DB::where('ilanid',$id)->get('ilanresim')->result();
		
		foreach ($resimlink as $key) {
			imageUnlink($key->link);
			
		}

		DB::where('ilanid',$id)->delete('ilanresim');
		redirect('uye/bitpazari');
	}

}// class sonu