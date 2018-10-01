<?php
//----------------------------------------------------------------------------------------------------
// ROUTE 
//----------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//----------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------
// Open Page
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanımı: Başlangıçta varsayılan açılış sayfasını sağlayan Controller dosyasıdır.
// Dikkat edilirse açılış sayfası welcome.php'dir ancak bu işlemi yapan home.php	          
// Controller dosyasıdır.																  					
//
//----------------------------------------------------------------------------------------------------
$config['Route']['openPage']	= 'home';

//----------------------------------------------------------------------------------------------------
// Show 404
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanımı: Geçersiz URI adresi girildiğinde yönlendirilmek istenen URI yoludur.   					
//
//----------------------------------------------------------------------------------------------------
$config['Route']['show404']		= '';

//----------------------------------------------------------------------------------------------------
// Pattern Type
//----------------------------------------------------------------------------------------------------
//
// Bu ayar Change URI ayarına yazılacak desenin türünü belirler.
//
// @key string patternType: special, classic
//
// special: Config/Regex.php dosyasında yer alan karakterlerin kullanımlarıdır.
// classic: Düzenli ifadelerdeki standart karakterlerin kullanımlarıdır. 	
//	      						
//----------------------------------------------------------------------------------------------------
$config['Route']['patternType']	= 'classic';

//----------------------------------------------------------------------------------------------------
// Change Uri
//----------------------------------------------------------------------------------------------------
//
// URI adreslerine rota vermek için kullanılır.
//
// Kullanım: @key -> yeni adres, @value -> eski adres										  
//    																			           																		  
// array																					  
// (																						  														  
//     'anasayfa'     => 'home/index'														      
// );																				      
//	      						
//----------------------------------------------------------------------------------------------------



$config['Route']['changeUri'] 	= [
	'kategori' => 'kategori/main',
	'konu'		=> 'konu/main',
	
	];
