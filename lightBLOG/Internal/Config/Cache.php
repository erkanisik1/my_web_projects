<?php
//----------------------------------------------------------------------------------------------------
// CACHE 
//----------------------------------------------------------------------------------------------------
//
// Author     : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
// Site       : www.znframework.com
// License    : The MIT License
// Copyright  : Copyright (c) 2012-2016, ZN Framework
//
//----------------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------------
// Driver                                                                           	      
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Ön bellekleme türü seçmek için kullanılır.		   	          		  
// Parametre: Ön bellekleme sürücülerinin herhangi biri.									  
// Drivers: apc, memcache, wincache, file, redis  				 	 					  	
//
//----------------------------------------------------------------------------------------------------
$config['Cache']['driver'] = 'file';

//----------------------------------------------------------------------------------------------------
// Driver Settings                                                                       
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Ön bellekleme sürücüleri için bağlantı ayarlarını yapmak için kullanılır
// Parametre: Sürücüler.									  							      
// Drivers: apc, memcache, wincache								 	 					  	
//
//----------------------------------------------------------------------------------------------------
$config['Cache']['driverSettings'] = 
[
	'memcache' => 
	[
		'host'	 => '127.0.0.1',
		'port' 	 => '11211',
		'weight' => '1',
	],
	
	'redis' => 
	[
		'password' 	  => NULL,
		'socketType' => 'tcp',
		'host' 		  => '127.0.0.1',	
		'port' 		  => 6379,
		'timeout' 	  => 0
	]
];

//----------------------------------------------------------------------------------------------------
// OB Gzhandler                                                                        	
//----------------------------------------------------------------------------------------------------
//
// Genel Kullanım: Tamponlamada ob_gzhandler işlevini aktif etmek için kullanılır.         
// Parametre: Gzip modu açık(true), gzip modu kapalı(false).  							  
// Örnek: true veya false.														          
//
//----------------------------------------------------------------------------------------------------
$config['Cache']['obGzhandler'] = false;