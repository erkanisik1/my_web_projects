<?php 
	class Urun_model extends model{
		
		function ekle($post)
		{

      Upload::settings
([
    'encode'     => false,
    'prefix'     => '__prefix__',
    'extensions' => 'jpg|png|gif',
    'maxsize'    => 8096
])->start('img');
		/*
$img=$_FILES['img']['name'];
$say = count($img);
for($i=0;$i<$say;$i++){
echo $_FILES['img']['tmp_name'][$i]; 
}
*/
			//output($post);
		}
    
	}