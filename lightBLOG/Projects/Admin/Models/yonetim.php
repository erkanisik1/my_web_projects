<?php 

	class Yonetim extends Model{
		

		

		

		
		function log(){return DB::orderBy('date','desc')->get('log')->result();}
	}