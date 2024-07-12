<?php
class MyClass
{
    public function __construct()
    {
        echo "Constructor called" . "object created.<br>";
    }
    public function __destruct()
    {
        echo "Destructor called . object destroyed.<br>";
    }
    public function displayMessage()
    {
        echo "Hello from MyClass!";
    }
}
$obj = new MyClass();
$obj->displayMessage();