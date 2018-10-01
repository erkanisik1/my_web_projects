<?php 

class User_model extends Model{
	function uyelistesi(){return DB::get('kullanici')->result();}

	function duzenle($post){return DB::where('kullanici_id',$post)->get('kullanici')->row();}

	function duzenle_kayit($post){
		DB::where('kullanici_id',$post['kullanici_id'])->update('kullanici',[
			'isim' => $post['isim'],
			'rumuz' => $post['rumuz'],
			'mail' => $post['mail'],
			'telefon' => $post['telefon'],
		]);
		if(DB::affectedRows()){redirect('admin/uye');}
		}

		function login($post){			
			$pass = md5($post['pass']);
			$ctrl = DB::where('email',$post['mail'],'and')
			->where('password',$pass,'and')
			->where('authority','66')
			->get('user')
			->row();

			if(DB::affectedRows()){
				Session::insert('username', $ctrl->name);
				Session::insert('userid', $ctrl->id);
				redirect(baseUrl('admin'));
			}

		}
	}
