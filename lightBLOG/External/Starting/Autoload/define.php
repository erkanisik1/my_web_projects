<?php 
ml::lang('en');
define('ADMIN',baseUrl('Projects/Admin/Views/'));
define('UYE','Projects/Uye/Views/');

 // new functions
function settings($title = null){return DB::select('value')->where('title',$title)->get('settings')->value();}

define('THEME', settings('theme_name').'/');
define('THEME_DIR',baseUrl(APPDIR.'Views/'.THEME));
//