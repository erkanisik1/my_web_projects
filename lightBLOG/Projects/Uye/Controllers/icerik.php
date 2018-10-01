<?php 



	class Icerik extends Controller

	{

		function main(){

			$data['icerik'] = $this->content_model->iceriklistesi();

			Import::view('content/icerik', $data);

		}



		function yeni(){

			if(Method::post()){

				$this->content_model->ekle(Method::post());

			}

			Import::view('content/icerik_yeni');

		}





		function duzenle($id){

			if(method::post()){$this->crk->duzenle_kayit(method::post());}

			$data['dzn'] = $this->crk->duzenle_sec($id); 

			Import::view('content/icerik_duzenle',$data);

		}



		function sil($id){

			DB::where('id', $id)->delete('icerik');

			redirect(baseUrl().'uye/icerik');

		}

	}