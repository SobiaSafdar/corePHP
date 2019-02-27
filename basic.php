<?php

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public."<br>";
        echo $this->protected."<br>";
        echo $this->private."<br>";
    }
}

$obj = new MyClass();
echo $obj->public; // Works
//echo $obj->protected; // Fatal Error
//echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private







class MyClass2 extends MyClass
{
    // We can redeclare the public and protected properties, but not private
    public $public = 'Public2';
    
    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // Works
echo $obj2->protected; // Fatal Error
echo $obj2->private; // Undefined
$obj2->printHello(); // Shows Public2, Protected2, Undefined