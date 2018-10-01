<?php 
	class Kategori extends Controller{
		
		function main($p = ''){
			if($p){
					$k = explode('-',$p);
					$data['katid'] = $k['0'];
					$data['icerik'] = $this->Anasayfa->kategori($k['0']); 
				
		
					Import::view(TEMA.'kategori',$data);
				}else{
					$data['icerik'] = $this->Anasayfa->kategori();
					Import::view(TEMA.'kategoriler',$data);
				}
		}
	}

 ?>