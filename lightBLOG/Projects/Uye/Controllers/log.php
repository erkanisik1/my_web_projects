<?php 
	class Log extends Controller{
		
		function main()
		{
			$data['log1'] = $this->yonetim->log();
			import::view('log',$data);
		}
	}