<?php

abstract class MakeDevices
{
    abstract public function TestPerformance();
    abstract public function verifyOwner();
    abstract public function sayWelcome($name);
}

class Iphone extends MakeDevices
{
    public $owner;
    public function TestPerformance()
    {
        echo "Performance 90%";
    }
    public function verifyOwner()
    {
        echo "owner is verfiyed";
    }
    public function sayWelcome($o)
    {
        $this->owner=$o ; 
        echo "welcome ".$o;
        }
}

class Ipad extends MakeDevices
{
    public $owner;
    public function TestPerformance()
    {
        echo "Performance 100%";
    }
    public function verifyOwner()
    {
        echo "owner is not verfied";
    }
    public function sayWelcome($s)
    {
    $this->owner= $s ; 
        echo "welcome ".$s;
    }
}


$iphone8 = new Iphone();
$iphone8->sayWelcome("donia");

echo "<pre>";
var_dump($iphone8);
echo "</pre>";

$ipad = new Ipad();
$iphone8->sayWelcome("sohir");

echo "<pre>";
var_dump($ipad);
echo "</pre>";