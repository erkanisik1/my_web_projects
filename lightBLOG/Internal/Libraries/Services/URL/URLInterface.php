<?php
namespace ZN\Services;

interface URLInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
		//----------------------------------------------------------------------------------------------------
	// Base
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $uri: empty
	// @param  numeric $index:  0
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public static function base($uri, $index);
	
	//----------------------------------------------------------------------------------------------------
	// Site
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $uri: empty
	// @param  numeric $index:  0
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public static function site($uri, $index);
	
	//----------------------------------------------------------------------------------------------------
	// Current
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $fix empty
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public static function current($fix);
	
	//----------------------------------------------------------------------------------------------------
	// Host
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $uri: empty
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public static function host($uri);
	
	//----------------------------------------------------------------------------------------------------
	// Prev
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  void
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public static function prev();
	
	//----------------------------------------------------------------------------------------------------
	// Base 64 Decode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $data: empty
	// @param  bool    $strict: false
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public static function base64Decode($data, $strict);
	
	//----------------------------------------------------------------------------------------------------
	// Base 64 Encode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $data: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public static function base64Encode($data);
	
	//----------------------------------------------------------------------------------------------------
	// Headers
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $url: empty
	// @param  string $format: 0
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function headers($url, $format);
	
	//----------------------------------------------------------------------------------------------------
	// Headers
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $fileName: empty
	// @param  bool   $useIncludePath: false
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public static function metaTags($fileName, $useIncludePath);
	
	//----------------------------------------------------------------------------------------------------
	// Build Query
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $data         : empty
	// @param  string $numericPrefix: NULL
	// @param  string $separator    : NULL
	// @param  string $enctype      : RFC1738
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public static function buildQuery($data, $numericPrefix, $separator, $enctype);
	
	//----------------------------------------------------------------------------------------------------
	// Parse
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $url      : empty
	// @param  numeric $component: 1
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public static function parse($url, $component);
	
	//----------------------------------------------------------------------------------------------------
	// Raw Decode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $str: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public static function rawDecode($str);

	//----------------------------------------------------------------------------------------------------
	// Raw Encode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $str: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public static function rawEncode($str);
	
	//----------------------------------------------------------------------------------------------------
	// Decode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $str: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public static function decode($str);
	
	//----------------------------------------------------------------------------------------------------
	// Encode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $str: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public static function encode($str);
}