<?php

class Iphone {
    public $name;
    public $ram;
    public function __call($method,$args){
        echo 'the ' . $method . ' Not found ';
        echo print_r($args);

    }

}


$phone = new Iphone();
$phone->sayHello("X","Y");
echo "<pre>";
print_r($phone);
echo "</pre>";

