<?php

class One
{
	protected const ONE = '10';
	protected const TWO = '20';
	
	public function __construct(){
		$this->getStack();
	}
	
	const STACK = [
		self::ONE => "first",
		self::TWO => "second",
	];
	
	public function getStack()
	{
		return self::STACK;
	}
	
}

$obj = new One();
