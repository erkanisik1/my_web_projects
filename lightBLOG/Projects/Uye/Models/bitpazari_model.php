<?php 
/**
* Created By  : Erkan IŞIK ( info@erkanisik.com )
* Created Date: 30-10-2017 11:15
* Update Date : 07-03-2018
*/
class Bitpazari_model extends Model{

	function yeni($post){
		$sontarih = date('Y-m-d', strtotime("+30 days"));
		$ilktarih = date('Y-m-d');
		
		if ($post['yenikategori']) {
			
			DB::insert('ilankategori',[
				'kategori_adi' 	=> $post['yenikategori'],
				'seo' 			=> seo($post['yenikategori']),
			]);
			$kategori = DB::insertID();

		}else{
			$kategori = $post['kategori'];
		}
	
		DB::insert('ilan',[
			'baslik' 		=> $post['baslik'],
			'baslik_seo'	=> seo($post['baslik']),
			'aciklama' 		=> $post['aciklama'],
			'fiyat' 		=> $post['fiyat'],
			'user_id' 		=> Session::select('userid'),
			'kategori'		=> $kategori,
			'urundurum' 	=> $post['urun_durumu'],
			'sontarih' 		=> $sontarih,
			'ilktarih' 		=> $ilktarih,
			'uyari'			=> 'İNCELEMEDE',
		]);

		if (DB::affectedRows()) {
			$ilanid = DB::insertID();

			Upload::settings([
		    'encode'     => false,
		    'prefix'     => 'bitpazari_',
		    'extensions' => 'jpg|png|gif',
		   
		])->target('uploads/ilan')->start('resim');
		

		foreach (Upload::info('path') as $key) {
			DB::insert('ilanresim',[
				'ilanid' => $ilanid,
				'link' => $key,]);		
		}
		jalert('İlanınız başarıyla kayıt edildi. Kontroldan sonra yayına alınacaktır.');
		git('uye/bitpazari');
		}

	
	}

	function urunlist(){
		//return DB::get('ilan')->result();
	}

	function duzenle($post){
		return DB::where('id',$post)->get('ilan')->row();
	}


}//class sonu