<?php

namespace NopphasinAra\HelloWorldPackage;

class HelloWorld
{
    public function __construct() {
      echo __CLASS__;
    }

    public static function sayHello()
    {
        echo "Hello World";
    }
}
