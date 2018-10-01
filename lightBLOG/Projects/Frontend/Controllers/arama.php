<?php 
	class Arama extends Controller{
		
		function main(){
			$ara = method::post('ara');

			$data['ara'] = $this->anasayfa->ara($ara);
			import::view(TEMA.'ara',$data);
		}
	}
 ?>