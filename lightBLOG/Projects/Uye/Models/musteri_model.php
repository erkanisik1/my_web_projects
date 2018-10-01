<?php 
	/**
	* 19092017 11:10
	*/
	class Musteri_model extends Model{
		
		function useradd($post){
			DB::insert('musteri',[
				'isim' => $post['musteriadi'],
				'telefon' => $post['telefon'],
				'adres' => $post['adres']
				]);

			if (DB::affectedRows()) {redirect(baseUrl('yonetim/musteri'));}
		}

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
				]);
					redirect('yonetim/musteri/repairlist');
		}
	}