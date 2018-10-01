<?php 

class Content extends Controller{
	function main(){
		$data['content'] = $this->content_model->content_list();
		Import::view('content/content_list', $data);
	}

	function content_new(){
		if(Method::post()){$this->content_model->content_new(Method::post());}
		Import::view('content/content_new');
	}

	function content_edit($id){
		if(method::post()){$this->content_model->content_update(method::post());}
		$data['edit'] = $this->content_model->content_edit($id); 
		Import::view('content/content_update',$data);
	}

	function content_delete($id){
		DB::where('id', $id)->delete('content');
		redirect(baseUrl().'admin/content');
	}

}