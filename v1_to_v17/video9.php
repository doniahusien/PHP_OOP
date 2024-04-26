<?php

class AppleDevice {
    public $ram = "1GB";
    public $inch = '4inch';
    public $space = "32 GB";
    public $color='Silver';
    public $ownerName;
    const chip = 'A8';
    const OWNERNAME = 4;

    public function setOwnerName(){
        if(strlen($this->ownerName< self::OWNERNAME)<3){
            echo "owner can't be less than ".self::OWNERNAME." chars";
        }
        else{
            echo " valid name ";
        }
    }
}

$iphone8 = new AppleDevice();
$iphone8->ownerName = 'donia';
$iphone8->ram = '3 GB';
$iphone8->inch = '6 Inch';
$iphone8->space = '128 GB';
$iphone8->color = 'black';
$iphone8->setOwnerName();

echo $iphone8::OWNERNAME;
echo "<pre>";
var_dump($iphone8);
echo "</pre>";