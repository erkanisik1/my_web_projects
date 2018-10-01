<?php 
class Settings_model extends Model{
	
	function lists(){
		return DB::get('settings')->result();
	}

	function edit($id){
		return DB::where('id',$id)->get('settings')->row();
	}

	function update($post){
		if ($post['value1']) {$d = $post['value1'];}else{$d = $post['value'];}
		DB::where('id',$post['id'])->update('settings',[
			'title' => $post['title'],
			'value' => $d
		]);
		if (DB::affectedRows()) {
			redirect('admin/setting');
		}
		
	}
}