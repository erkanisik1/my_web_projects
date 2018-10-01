<?php 



class Contact extends Controller{

	

	function main(){
		$mesaj = '
		Mesajı Gönderen: '.method::post('isim').'<br>
		Mail Adresi: '.method::post('mail').'
		<br>Mesaj: '.method::post('mesaj');

		if(method::post()){

			Email::sender('musteri_hizmetleri@kartalelektronik.com', 'Kartal Elektronik')

			->receiver('info@kartalelektronik.com')

			->subject(method::post('isim').' mesajı var')

			->message($mesaj)

			->send();
			if (!Email::error()) {
				
				Afunc::jalert('Mesajınız başarıyla gönderildi.\nEn kısa sürede sizinle iletişime geçilecektir.'); 

				Afunc::git();
			}



		}

		Import::view(THEMA.'iletisim');

	}

}





?>