<?php
class AppleDevice
{
    public $ram = "1GB";
    public $inch = '4inch';
    public $color = 'Silver';
    public $name;
    public function changeSpace($r, $in, $c)
    {
        $this->ram = $r;
        $this->inch = $in;
        $this->color = $c;
    }
    final public function sayHello($name)
    {
        $this->name = $name;
        echo 'Welcome To ' . $name;
    }
}
class Sony extends AppleDevice
{
    public $camera;
}

$iphone8 = new AppleDevice();
$iphone8->changeSpace("8GB", "8Inch", "blue");
$iphone8->sayHello("iphone");
echo "<pre>";
var_dump($iphone8);
echo "</pre>";

$sony = new Sony();
$sony->changeSpace("7GB", "7Inch", "blue");
$sony->camera = "25 MB";
$sony->sayHello("sony");

echo "<pre>";
var_dump($sony);
echo "</pre>";
