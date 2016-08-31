<?php

class MyFirstClass {
    public $someProp;

    function myMethod()
    {
        echo 'Hello!';
    }

    function setProp($myProp)
    {
        $this->someProp = $myProp;
    }

    function __construct()
    {
        echo 'I`m alive!';
    }
}

$myObject = new myFirstClass();
$myObject->someProp = 'Vasya';
$myObject->myMethod();
echo $myObject->someProp;
