<?php
namespace ZN\Components;

interface TableInterface
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
	// Attr
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $attributes
	//
	//----------------------------------------------------------------------------------------------------
	public function attr($attributes);
	
	//----------------------------------------------------------------------------------------------------
	// Cell
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $spacing
	// @param numeric $padding
	//
	//----------------------------------------------------------------------------------------------------
	public function cell($spacing, $padding);
	
	//----------------------------------------------------------------------------------------------------
	// Cell Spacing
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $spacing
	//
	//----------------------------------------------------------------------------------------------------
	public function cellSpacing($spacing);
	
	//----------------------------------------------------------------------------------------------------
	// Cell Padding
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $padding
	//
	//----------------------------------------------------------------------------------------------------
	public function cellPadding($padding);
	
	//----------------------------------------------------------------------------------------------------
	// Border
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $border
	// @param string  $color
	//
	//----------------------------------------------------------------------------------------------------
	public function border($border, $color);
	
	//----------------------------------------------------------------------------------------------------
	// Border Size
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $border
	//
	//----------------------------------------------------------------------------------------------------
	public function borderSize($border);
	
	//----------------------------------------------------------------------------------------------------
	// Border Color
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $color
	//
	//----------------------------------------------------------------------------------------------------
	public function borderColor($color);
	
	//----------------------------------------------------------------------------------------------------
	// Align
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $align
	//
	//----------------------------------------------------------------------------------------------------
	public function align($align);
	
	//----------------------------------------------------------------------------------------------------
	// Width
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $width
	//
	//----------------------------------------------------------------------------------------------------
	public function width($width);
	
	//----------------------------------------------------------------------------------------------------
	// Height
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $height
	//
	//----------------------------------------------------------------------------------------------------
	public function height($height);
	
	//----------------------------------------------------------------------------------------------------
	// Size
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $width
	// @param numeric $height
	//
	//----------------------------------------------------------------------------------------------------
	public function size($width, $height);
	
	//----------------------------------------------------------------------------------------------------
	// Css
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $css
	//
	//----------------------------------------------------------------------------------------------------
	public function css($css);
	
	//----------------------------------------------------------------------------------------------------
	// Style
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $attributes
	//
	//----------------------------------------------------------------------------------------------------
	public function style($attributes);
	
	//----------------------------------------------------------------------------------------------------
	// Background
	//----------------------------------------------------------------------------------------------------
	// 
	// @param mixed $background
	//
	//----------------------------------------------------------------------------------------------------
	public function background($background);
	
	//----------------------------------------------------------------------------------------------------
	// Bg Color
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $bgColor
	//
	//----------------------------------------------------------------------------------------------------
	public function bgColor($bgColor);
	
	//----------------------------------------------------------------------------------------------------
	// Content
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function content();
	
	//----------------------------------------------------------------------------------------------------
	// Create
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function create();
}