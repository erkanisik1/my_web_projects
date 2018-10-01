<?php
namespace ZN\Database\DB\Traits;

trait TriggerTrait
{
	//----------------------------------------------------------------------------------------------------
	// protected $when
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $when = '';
	
	//----------------------------------------------------------------------------------------------------
	// protected $event
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $event = '';
	
	//----------------------------------------------------------------------------------------------------
	// protected $order
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $order = '';
	
	//----------------------------------------------------------------------------------------------------
	// protected $body
	//----------------------------------------------------------------------------------------------------
	//
	// @var string
	//
	//----------------------------------------------------------------------------------------------------
	protected $body = '';
	
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// when()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $type: BEFORE, AFTER
	//
	//----------------------------------------------------------------------------------------------------
	public function when($type = '')
	{
		$this->when = $type;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// event()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $type: INSERT, UPDATE, DELETE
	//
	//----------------------------------------------------------------------------------------------------
	public function event($type = '')
	{
		$this->event = $type;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// order()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $type: FOLLOWS, PRECEDES
	//
	//----------------------------------------------------------------------------------------------------
	public function order($type = '', $name = '')
	{
		$this->order = $type.' '.$name;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// body()
	//----------------------------------------------------------------------------------------------------
	//
	// @param mixed $args: BEGIN $arg1; $arg2; .... $arg3; END;
	//
	//----------------------------------------------------------------------------------------------------
	public function body(...$args)
	{
		if( is_array($args[0]) )
		{
			$args = $args[0];	
		}
		
		$this->body = 'BEGIN '.implode('; ', $args).';'.' END;';
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// createTrigger()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function createTrigger($name = '')
	{
		$query = 'CREATE TRIGGER '.$name.
		         ' '.$this->when.
				 ' '.$this->event.
				 ' ON'.
				 ' '.$this->table.
				 ' FOR EACH ROW'.
				 ' '.$this->order.
				 ' '.$this->body;
		
		return $query; 		 
		$this->_triggerResetQuery();

		return $this->_runQuery($query);
	}
	
	//----------------------------------------------------------------------------------------------------
	// dropTrigger()
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function dropTrigger($name = '')
	{
		$query = 'DROP TRIGGER '.$name;
				 
		return $this->_runQuery($query);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Protected _resetQuery()
	//----------------------------------------------------------------------------------------------------
	// 
	// @param void()
	//
	//----------------------------------------------------------------------------------------------------
	protected function _triggerResetQuery()
	{
		$this->table	= NULL;
		$this->when	    = NULL;
		$this->event    = NULL;
		$this->order    = NULL;
		$this->body	    = NULL;
	}
}