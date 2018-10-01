<?php 

/**
* 
*/
class Setting extends Controller{
	
	function main(){
		$data['setting'] = $this->settings_model->lists();
		import::view('setting/index',$data);
	}

	function edit($id){
		if(Method::post()){$this->settings_model->update(Method::post());}
		$data['edit'] = $this->settings_model->edit($id);
		import::view('setting/edit',$data);
	}
	function delete($id){
		DB::where('id', $id)->delete('settings');
		redirect(baseUrl().'admin/setting');
	}
}