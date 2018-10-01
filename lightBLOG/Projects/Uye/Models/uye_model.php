<?php 

class Uye_model extends Model{


	function kayit($post){
		$pass = md5($post['pass']);
		$rnd = md5(date('Ymd His'));
		DB::insert('kullanici',[
			'isim' => $post['isim'],
			'sifre' => $pass,
			'mail' => $post['email'],
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
			->receiver($post['email'])
			->subject('Üyelik onayı')
			->message($mesaj)
			->send(); 			 
		}

		jalert('Kaydınız başarıyla tamamlanmıştır.\n Lütfen size gönderilen maildeki onay linkine tıklayarak üyeliğinizi aktif ediniz...');
		git();
	}//kayit



	function duzenle($post){
		return DB::where('kullanici_id',$post)->get('kullanici')->row();
	}


	function duzenle_kayit($post){


		DB::where('kullanici_id',Session::select('userid'))->update('kullanici',[
			'isim' => $post['isim'],
			'rumuz' => $post['rumuz'],
			'mail' => $post['mail'],
			'ilce' => $post['ilce'],
			'il' => $post['il'],
			'telefon' => $post['telefon'],
			]);

		if(DB::affectedRows()){
			redirect('uye');
		}

	}

	function login($post){
		$pass = md5($post['pass']);
		$login = DB::where('mail',$post['mail'],'and')
		->where('sifre',$pass, 'and')
		->where('yetki','1','and')
		->where('durum','1')
		->get('kullanici')
		->row();
		

		if(DB::affectedRows()){
			Session::insert('username',$login->isim);
			Session::insert('userid',$login->kullanici_id);
			Session::insert('yetki',$login->yetki);
			Session::insert('login','true');
			logSave($login->isim.' ADLI ÜYE GİRİŞ YAPTI','ÜYE GİRİŞİ');
			redirect('uye');
		}
	}

	function sifremi_unuttum($post){
		$mail = DB::select('mail')->where('mail',$post['mail'])->get('kullanici')->value();
		if($mail){
			$yenisifre = sifreuret('8');
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

}// class sonu