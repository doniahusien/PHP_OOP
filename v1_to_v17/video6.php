<?php

class AppleDevice {
    public $ram = "1GB";
    public $inch = '4inch';
    public $space = "32 GB";
    //public $color='Silver';
}

$iphone8 = new AppleDevice();
$iphone8->ram = '3 GB';
$iphone8->inch = '6 Inch';
$iphone8->space = '128 GB';
$iphone8->color = 'black';

$iphone6 = new AppleDevice();
$iphone6->ram = '5 GB';
$iphone6->inch = '5 Inch';
$iphone6->space = '64 GB';
$iphone6->color = 'Gold';
echo "<pre>";
var_dump($iphone8);
var_dump($iphone6);
echo "</pre>";
