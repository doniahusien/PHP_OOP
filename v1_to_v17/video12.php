<?php

class AppleDevice {
    public $ram = "1GB";
    public $inch = '4inch';
    public $color='Silver';
    private $lock;

    public function changeSpace($r,$in,$c){
        $this->ram = $r;
        $this->inch = $in;
        $this->color = $c;
    }
    public function changeLock($lo){
        $this->lock = sha1($lo);
    }

}


$iphone8 = new AppleDevice();
$iphone8->changeLock("862003");

$iphone8->changeSpace("8GB","8Inch","blue");
echo "<pre>";
var_dump($iphone8);
echo "</pre>";
