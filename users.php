<?php

abstract class User
{
    public $login;
    public $pass;
    protected $permission;

    function __construct($login)
    {
        $this->login = $login;
        static::setPass();
    }

    abstract protected function setPass();

    protected function setLogin($login)
    {
        if ($login == 'Sarah') {
            
        } else {
            echo 'You are ';
        }
    }

    public function greeting()
    {
        echo 'Hello, ' . $this->login . '! ';
    }
}

class Admin extends User
{
    protected function setPass()
    {
        $this->pass = 'Pass';
    }

    protected function getPermissions()
    {
        $this->permission = 'can delete users';
    }

    public function greeting()
    {
        parent::greeting(); 
        echo 'Your password: ' . $this->pass . '<br>';
        echo 'And you are ' . $this->permission;
    }
}

class Guest extends User
{
    protected function setPass()
    {
        $this->pass = '1234';
    }

    public function greeting()
    {
        parent::greeting();
        echo 'Your password: ' . $this->pass . '<br>';
    }
}

$userAdmin = new Admin('Sarah');
$userAdmin->greeting();

echo '<br>';

$userGuest = new Guest('Jack');
$userGuest->greeting();
