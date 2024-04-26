<?php

class AppleDevice {
    public $ram = "1GB";
    public $inch = '4inch';
    public $space = "32 GB";
    public $color='Silver';
    public $ownerName;
    public function homePressed(){
        echo 'This Iphone ram is'.$this->ram;
    }
    
    public function setOwnerName($owner){
        if(strlen($owner)<3){
            echo "owner can't be less than 3 chars";
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
$iphone8->homePressed();
$iphone8->setOwnerName('Donia');

$iphone6 = new AppleDevice();
$iphone6->ram = '4 GB';
$iphone6->homePressed();


echo "<pre>";
var_dump($iphone8);
echo "</pre>";