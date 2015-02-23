<?php

class HelloWorld
{
    public function One()
    {
        echo 'One';
    }

    public function Two()
    {
        echo 'Two';
    }

    public function __construct(){
        echo"Hello World";
    }
}

new HelloWorld();

