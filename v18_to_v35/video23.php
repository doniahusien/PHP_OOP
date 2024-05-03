<?php

class Phone{
    public $name;
    public $ram;
    private $color;
    public function __get($prop){
        echo "the property " . $prop . " not found <br>";
    }

    public function __set($pro,$val){
        echo "The property " . $pro. " not found and can't assgin to " . $val;
    }
}

$phone = new Phone();
$phone->color = "red";
echo $phone->test;

echo '<pre>';
print_r($phone);
echo '</pre>';