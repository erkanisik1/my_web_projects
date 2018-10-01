<?php
namespace ZN\Components;

class __USE_STATIC_ACCESS__Table implements TableInterface
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
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	protected $attr = [];
	
	//----------------------------------------------------------------------------------------------------
	// Table
	//----------------------------------------------------------------------------------------------------
	// 
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $table;
	
	//----------------------------------------------------------------------------------------------------
	// Error Control
	//----------------------------------------------------------------------------------------------------
	// 
	// $error
	// $success
	//
	// error()
	// success()
	//
	//----------------------------------------------------------------------------------------------------
	use \ErrorControlTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Call Method
	//----------------------------------------------------------------------------------------------------
	// 
	// __call()
	//
	//----------------------------------------------------------------------------------------------------
	use \CallUndefinedMethodTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Designer Methods Başlangıç
	//----------------------------------------------------------------------------------------------------

	//----------------------------------------------------------------------------------------------------
	// Attr
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $attributes
	//
	//----------------------------------------------------------------------------------------------------
	public function attr($attributes = [])
	{
		if( ! is_array($attributes))
		{
			\Errors::set('Error', 'arrayParameter', 'attributes');
			return $this;	
		}
		
		foreach($attributes as $att => $val)
		{
			$this->attr[$att] = $val; 
		}
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Align
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $align
	//
	//----------------------------------------------------------------------------------------------------
	public function align($align = '')
	{
		if( ! is_string($align) )
		{
			\Errors::set('Error', 'stringParameter', 'align');
			return $this;	
		}
		
		if( ! empty($align)) $this->attr['align'] = $align;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Content
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function content(...$elements)
	{	
		$colNo = 1;
		$rowNo = 1;
		$table = '';
		$eol   = EOL;
		
		if( isset($elements[0][0]) && is_array($elements[0][0]))
		{
			$elements = $elements[0];	
		}
		
		foreach($elements as $key => $element)
		{
			$table .= $eol."\t".'<tr>'.$eol;
			
			if(is_array($element))foreach($element as $k => $v)
			{
				$val = $v;
				$attr = "";
				
				if(is_array($v))
				{
					$attr = \Html::attributes($v);
					$val = $k;
				}
			
				$table .= "\t\t".'<td'.$attr.'>'.$val.'</td>'.$eol;	
				$colNo++;
			}
		
			$table .= "\t".'</tr>'.$eol;
			$rowNo++;
		}
		
		$this->table = $table;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Cell
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $spacing
	// @param numeric $padding
	//
	//----------------------------------------------------------------------------------------------------
	public function cell($spacing = 0, $padding = 0)
	{
		if( ! is_numeric($spacing) || ! is_numeric($padding) )
		{
			\Errors::set('Error', 'numericParameter', 'spacing & padding');
			return $this;	
		}
		if( ! empty($spacing) ) $this->attr['cellspacing'] = $spacing;
		if( ! empty($padding) ) $this->attr['cellpadding'] = $padding;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Cell Spacing
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $spacing
	//
	//----------------------------------------------------------------------------------------------------
	public function cellSpacing($spacing = 0)
	{
		if( ! is_numeric($spacing) )
		{
			\Errors::set('Error', 'numericParameter', 'spacing');
			return $this;	
		}
		
		if( ! empty($spacing) ) $this->attr['cellspacing'] = $spacing;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Cell Padding
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $padding
	//
	//----------------------------------------------------------------------------------------------------
	public function cellPadding($padding = 0)
	{
		if( ! is_numeric($padding) )
		{
			\Errors::set('Error', 'numericParameter', 'padding');
			return $this;	
		}
		
		if( ! empty($padding)) $this->attr['cellpadding'] = $padding;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Border
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $border
	// @param string  $color
	//
	//----------------------------------------------------------------------------------------------------
	public function border($border = 0, $color = '')
	{
		if( ! is_numeric($border) )
		{
			\Errors::set('Error', 'numericParameter', 'border');
			return $this;	
		}
		
		if( ! is_string($color) )
		{
			\Errors::set('Error', 'stringParameter', 'color');
			return $this;	
		}
		
		if( ! empty($border) ) $this->attr['border']      = $border;
		if( ! empty($color) )  $this->attr['bordercolor'] = $color;
	
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Border Size
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $border
	//
	//----------------------------------------------------------------------------------------------------
	public function borderSize($border = 0)
	{
		if( ! is_numeric($border) )
		{
			\Errors::set('Error', 'numericParameter', 'border');
			return $this;	
		}
		
		if( ! empty($border) ) $this->attr['border'] = $border;
	
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Border Color
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $color
	//
	//----------------------------------------------------------------------------------------------------
	public function borderColor($color = '')
	{
		if( ! is_string($color) )
		{
			\Errors::set('Error', 'stringParameter', 'color');
			return $this;	
		}

		if( ! empty($color)) $this->attr['bordercolor'] = $color;
	
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Width
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $width
	//
	//----------------------------------------------------------------------------------------------------
	public function width($width = '')
	{
		if( ! is_scalar($width) )
		{
			\Errors::set('Error', 'valueParameter', 'width');
			return $this;	
		}
		
		if( ! empty($width)) $this->attr['width'] = $width;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Height
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $height
	//
	//----------------------------------------------------------------------------------------------------
	public function height($height = '')
	{
		if( ! is_scalar($height) )
		{
			\Errors::set('Error', 'valueParameter', 'height');
			return $this;	
		}
		
		if( ! empty($height)) $this->attr['height'] = $height;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Size
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $width
	// @param numeric $height
	//
	//----------------------------------------------------------------------------------------------------
	public function size($width = '', $height = '')
	{
		if( ! is_scalar($height) || ! is_scalar($width) )
		{
			\Errors::set('Error', 'valueParameter', 'width & height');
			return $this;	
		}
		
		if( ! empty($width) )  $this->attr['width']  = $width;
		if( ! empty($height) ) $this->attr['height'] = $height;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Css
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $css
	//
	//----------------------------------------------------------------------------------------------------
	public function css($css = '')
	{
		if( ! is_string($css) )
		{
			\Errors::set('Error', 'stringParameter', 'css');
			return $this;	
		}
		
		if( ! empty($css) ) $this->attr['class'] = $css;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Style
	//----------------------------------------------------------------------------------------------------
	// 
	// @param array $attributes
	//
	//----------------------------------------------------------------------------------------------------
	public function style($_attributes = [])
	{
		$attribute = "";
		
		if( is_array($_attributes) )
		{
			foreach($_attributes as $key => $values)
			{
				if( is_numeric($key) )
				{
					$key = $values;
				}
				
				$attribute .= ' '.$key.':'.$values.';';
			}	
		}
		
		$this->attr['style'] = $attribute;
		
		return $this;	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Background
	//----------------------------------------------------------------------------------------------------
	// 
	// @param mixed $background
	//
	//----------------------------------------------------------------------------------------------------
	public function background($background = '')
	{
		if( ! is_string($background) )
		{
			\Errors::set('Error', 'stringParameter', 'background');
			return $this;	
		}
		
		if( ! empty($background)) $this->attr['background'] = $background;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Bg Color
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $bgColor
	//
	//----------------------------------------------------------------------------------------------------
	public function bgColor($bgColor = '')
	{
		if( ! is_string($bgColor) )
		{
			\Errors::set('Error', 'stringParameter', 'bgColor');
			return $this;	
		}
		
		if( ! empty($bgColor)) $this->attr['bgcolor'] = $bgColor;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// Designer Methods Bitiş
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Create Method Başlangıç
	//----------------------------------------------------------------------------------------------------

	public function create()
	{
		$table  = '<table'.\Html::attributes($this->attr).'>';
		$table .= $this->table;
		$table .= '</table>';
		
		if( ! empty($this->table)) $this->table = NULL;
		if( ! empty($this->attr))  $this->attr = [];
		
		return $table;
	}	
	
	//----------------------------------------------------------------------------------------------------
	// Create Method Bitiş
	//----------------------------------------------------------------------------------------------------
}