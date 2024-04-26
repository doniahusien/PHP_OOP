<?php

class AppleDevice {
    public $ram = "1GB";
    public $inch = '4inch';
    public $color='Silver';

    public function changeSpace($r,$in,$c){
        $this->ram = $r;
        $this->inch = $in;
        $this->color = $c;
    }

}
class Sony extends AppleDevice{
    public $camera;
}

$iphone8 = new AppleDevice();
$iphone8->changeSpace("8GB","8Inch","blue");

$sony = new Sony();
$sony->changeSpace("7GB","7Inch","blue");
$sony->camera = "25 MB";

echo "<pre>";
var_dump($iphone8);
var_dump($sony);
echo "</pre>";
