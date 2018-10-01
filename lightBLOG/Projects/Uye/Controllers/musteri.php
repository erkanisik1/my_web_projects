<?php

	/**
	* 19092017 10:45
	*/
	class Musteri extends Controller{
		
		function main(){
	$data['repairlist'] = $this->musteri_model->bekleyenlist();
			import::view('tamirler/customer_view',$data);
		}

		function customeradd(){
			if (method::post()) {$this->musteri_model->useradd(method::post());}
			import::view('tamirler/customeradd_view');
		}

		function customerlist(){
			$data['customerlist'] = DB::get('musteri')->result();
			import::view('tamirler/customerlist_view',$data);
		}

		function repairadd(){
			if (method::post()) {$this->musteri_model->repairadd(method::post());}
			$data['musteri'] = DB::get('musteri')->result();
			import::view('tamirler/repairadd_view',$data);	
		}

		function repairlist($id = ''){
			$data['repairlist'] = $this->musteri_model->repairlist();
			import::view('tamirler/repairlist_view',$data);	
		}
		function repairedit($id){
			if (method::post()) {$this->musteri_model->repaireditSave(method::post());}
			$data['musteri'] = DB::get('musteri')->result();
			$data['edit'] = $this->musteri_model->repairedit($id);
			import::view('tamirler/repairedit_view',$data);
		}

		function repairdetail($id){
			$data['detay'] = DB::where('tamir_id', $id)->get('tamir')->row();
			$data['musteri'] = DB::where('id',$data['detay']->musteriID)->get('musteri')->row();
			
 			import::view('tamirler/repairdetail_view',$data);
		}
	}// class end