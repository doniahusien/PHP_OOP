<?php

class Iphonen{
    public $name;

    public function __clone(){
        $this->name = clone $this->name;
    }
}


$main = new Iphonen();

$copy = $main;
$copy->name = 'hanen';

echo '<pre>';
print_r($main);
echo '</pre>';

echo '<pre>';
print_r($copy);
echo '</pre>';