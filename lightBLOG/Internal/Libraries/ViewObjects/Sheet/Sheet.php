<?php
namespace ZN\ViewObjects;

class __USE_STATIC_ACCESS__Sheet implements SheetInterface
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
	// Call Method
	//----------------------------------------------------------------------------------------------------
	// 
	// __call()
	//
	//----------------------------------------------------------------------------------------------------
	use \CallUndefinedMethodTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Style Sheet Trait
	//----------------------------------------------------------------------------------------------------
	// 
	// traits()
	//
	//----------------------------------------------------------------------------------------------------
	use SheetTrait;
	
	protected $namespace = 'ZN\ViewObjects\Sheet\Helpers\\';
	
	//----------------------------------------------------------------------------------------------------
	// Animation
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function animation($tag = false)
	{
		return uselib($this->namespace.'Animation', [$tag]);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Manipulation
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function manipulation()
	{
		return uselib($this->namespace.'Manipulation');
	}
	
	//----------------------------------------------------------------------------------------------------
	// Shadow
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function shadow($tag = false)
	{
		return uselib($this->namespace.'Shadow', [$tag]);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Transform
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function transform($tag = false)
	{
		return uselib($this->namespace.'Transform', [$tag]);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Transition
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void
	//
	//----------------------------------------------------------------------------------------------------
	public function transition($tag = false)
	{
		return uselib($this->namespace.'Transition', [$tag]);
	}
}