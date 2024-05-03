<?php
class Iphone{
    public $name;
    public function __construct($n){
        $this->name = $n;
    }
}


$phone = new Iphone("Sohir");

$copy = $phone;//by ref

echo '<pre>';
print_r($phone);
echo '</pre>';

echo '<pre>';
print_r($copy);
echo '</pre>';