<?php

class One
{
	const ONE = '10';
	const TWO = '20';
	
	public function __construct(){
		$this->getStack();
	}
	
	const STACK = [
		self::ONE => "first",
		self::TWO => "second",
	];
	
	static public function testStatic(){
		return 'test well';
	}
	
	public function getStack()
	{
		var_dump(self::STACK);
	}
	
}

$obj = new One();

var_dump($obj::STACK);
echo $obj->testStatic() . "<br>";
echo $obj::testStatic() . "<br>";