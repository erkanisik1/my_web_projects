<?php 

class Uye_model extends Model{
	
	function kayit($post){

		$pass = md5($post['pass']);
		$rnd = md5(date('Ymd His'));

		DB::insert('kullanici',[
			'isim' => $post['isim'],
			'sifre' => $pass,
			'mail' => $post['mail'],
			'rnd' => $rnd,
			'durum' => '0',
			'yetki' => '1',			
			]);
		$mesaj = "
			Merhaba $post[isim].<br>
			Sitemize kayıt olduğunuz için teşekkür ederiz.<br>
			Aşağıdaki linke tıklayarak üyeliğinizi aktif edebilirsiniz.<br>
			<a href=\"http://kartalelektronik.com/uye/aktivizasyon/$rnd\">Üyelik aktif etmek için lütfen buraya tıklayın.</a>
		";

		if (DB::affectedRows()){
			Email::sender('musteri_hizmetleri@kartalelektronik.com', 'Kartal Elektronik Müşteri Hizmetleri')
			->receiver($post['mail'])
			->subject('Üyelik onayı')
			->message($mesaj)
			->send(); 			 
		}
		Afunc::jalert('Kaydınız başarıyla tamamlanmıştır.\n Lütfen size gönderilen maildeki onay linkine tıklayarak üyeliğinizi aktif ediniz...');
		Afunc::git();
		
	
	}//kayit


		function login($post){
			$pass = md5($post['pass']);
			$uye = DB::where('mail',$post['mail'],'and')
			->where('sifre',$pass,'and')
			->where('durum','1')
			->get('kullanici')
			->row();
			if(DB::affectedRows()){
				Session::insert('login',TRUE);
				Session::insert('isim',$uye->isim);
				Session::insert('uye_id',$uye->kullanici_id);
				redirect(baseUrl());

			}
		}//login

		function sifremi_unuttum($post){
			$mail = DB::select('mail')->where('mail',$post['mail'])->get('kullanici')->value();
			if($mail){
				$yenisifre = Afunc::sifreuret('8');
				DB::where('mail',$mail)->update('kullanici',['sifre'=> md5($yenisifre),]);
				$mesaj ="
				Bu mesaj şifrenizi unuttuğunuz ve yeni şifre talebiniz için gönderilmiştir.<br><br>
				Sitemize yeni şifreyle girdikten sonra kontrol panelinizden şifrenizi değiştirebilirsiniz.<br><br>
				Yeni Şifreniz: <b>$yenisifre</b>
				 ";
				Email::sender('musteri_hizmetleri@kartalelektronik.com', 'Kartal Elektronik Müşteri Hizmetleri')
			->receiver($mail)
			->subject('Yeni şifreniz')
			->message($mesaj)
			->send(); 	

			Afunc::jalert('Yeni Şifreniz mail  Adresinize gönderildi. \n Lütfen Mail gelen kutunuzu kontrol edin.');
			Afunc::git();
			}else{
				Afunc::jalert('yazdığınız mail adresi sistemde kayıtlı değil...');
			}
		


		}

}//Uye_model

 ?>