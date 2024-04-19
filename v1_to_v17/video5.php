<?php

class AppleDevice {
    public $ram;
    public $inch;
    public $space;
    public $price;
    public $color="black";
    
}
$iphone8 =  new AppleDevice();
$iphone6 =  new AppleDevice();
echo "<pre>";
var_dump($iphone8);

var_dump($iphone6);
echo "</pre>";
