<?php

class Test
{

	const FIRST = array(
		'10' => 'some',
		'20' => 'some2',
	);

	public function showConst()
    {
		var_dump(self::FIRST);
		echo self::FIRST['20'];
	}

}

class Test2 extends Test{}

$foo = new Test2();
$foo->showConst();