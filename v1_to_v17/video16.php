<?php

abstract class MakeDevice
{
    public $ram;
    public function sayHallo()
    {
        echo 'Say Hello<br>';
    }
    abstract public function sayBye();
}

class AppleDevice extends MakeDevice
{
    public function sayBye()
    {
        echo 'say Bye';
    }
}

$iphone8 = new AppleDevice();
$iphone8->sayHallo();
$iphone8->sayBye();

echo "<pre>";
var_dump($iphone8);
echo "</pre>";
