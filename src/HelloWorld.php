<?php

namespace HelloWorldPackage;

class HelloWorld
{
    public static function __construct() {
      echo __CLASS__;
    }

    public static function sayHello()
    {
        echo "Hello World";
    }
}
