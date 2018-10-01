<?php 
	/**
	* Created Date: 19-09-2017 
	* Update Date : 20-01-2018 
	*/
	class Musteri_model extends Model{
		/* müşteri işlemleri */
		function useradd($post){
			DB::insert('musteri',[
				'isim' => $post['musteriadi'],
				'telefon' => $post['telefon'],
				'adres' => $post['adres']
				]);

			if (DB::affectedRows()) {redirect(baseUrl('yonetim/musterii/customerlist'));}
		}

		function customeredit($id){
			return DB::where('id', $id)->get('musteri')->row();
		}

		function customerSave($post){
			DB::where('id', $post['id'])->update('musteri',[
				'isim' => $post['musteriadi'],
				'telefon' => $post['telefon'],
				'adres' => $post['adres']
				]);

			if (DB::affectedRows()) {redirect(baseUrl('yonetim/musterii/customerlist'));}
		}
		/* /müşteri işlemleri */

		function repairadd($post){
			DB::insert('tamir',[
			'musteriID' => $post['musteriID'],
			'marka' => $post['marka'] ,
			'turu' => $post['turu'],
			'sikayeti' => $post['sikayet'] ,
			'tespit' => $post['tespit'] ,
			'tamir' => $post['tamir'] ,
			'gelistarihi' => $post['gelistarihi'] ,
			'teslimtarihi' => $post['teslimtarihi'] ,
			'ucret' => $post['ucret'] ,
			'alinanucret' => $post['alinanucret'] ,
			]);
			output(DB::error());
			if (DB::affectedRows()) {redirect(baseUrl('yonetim/musteri'));}	
		}

		function repairlist(){
			return DB::Innerjoin('musteri.id','tamir.musteriID')->orderBy('tamir.gelistarihi','asc')->get('tamir')->result();
		}

		function bekleyenlist(){
			return DB::where('durum','0')->Innerjoin('musteri.id','tamir.musteriID')->orderBy('tamir.gelistarihi','asc')->get('tamir')->result();
		}

		function repairedit($id){return DB::where('tamir_id',$id)->get('tamir')->row();}

		function repaireditSave($post){
			DB::where('tamir_id', $post['editID'])->update('tamir',[
			'musteriID' => $post['musteriID'],
			'marka' => $post['marka'] ,
			'turu' => $post['turu'],
			'sikayeti' => $post['sikayet'] ,
			'tespit' => $post['tespit'] ,
			'tamir' => $post['tamir'] ,
			'gelistarihi' => $post['gelistarihi'] ,
			'teslimtarihi' => $post['teslimtarihi'] ,
			'ucret' => $post['ucret'] ,
			'alinanucret' => $post['alinanucret'] ,
			'durum' => $post['durum'],
			'uyeID' => $post['uyeID']
			]);
			redirect('yonetim/musteri/repairlist');
		}

		
	}