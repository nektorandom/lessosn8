<?php

abstract class Human
{
    public $name = 'unknow';
    protected $sex = 'unknow';

    function __construct($name)
    {
        $this->name = $name;
        static::setSex();
    }

    abstract protected function setSex();

    function greeting()
    {
        echo 'Hello, my name is ' . $this->name . '! ';
        echo 'I`m a ' . $this->sex . '! ';
    }
}

class Man extends Human
{
    function greeting()
    {
        parent::greeting();
        echo 'And I have a beard!';
    }

    protected function setSex()
    {
        $this->sex = 'man';
    }
}

class Woman extends Human
{
    function greeting()
    {
        parent::greeting();
        echo 'But I have boobs!';
    }

    protected function setSex()
    {
        $this->sex = 'girl';
    }
}

//$person = new Human('Lucy');
//$person->greeting();

echo '<br>';

$personMale = new Man('John');
$personMale->greeting();

echo '<br>';

$personFemale = new Woman('Sarah', 'girl');
$personFemale->greeting();

echo '<br>';

$personUnknow = new Man('Bojack', 'horse');
$personUnknow->greeting();
