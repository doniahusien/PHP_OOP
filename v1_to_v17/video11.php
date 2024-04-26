<?php

class AppleDevice {
    public $ram = "1GB";
    public $inch = '4inch';
    public $space = "32 GB";
    public $color='Silver';
    public function changeSpace($r,$in,$c){
        $this->ram = $r;
        $this->inch = $in;
        $this->color = $c;

    }

}

$iphone8 = new AppleDevice();


$iphone8->ram = '3 GB';
$iphone8->inch = '6 Inch';
$iphone8->space = '128 GB';
$iphone8->color = 'black';

$iphone8->changeSpace("8GB","8Inch","blue");
echo "<pre>";
var_dump($iphone8);
echo "</pre>";

echo $iphone8->ram;