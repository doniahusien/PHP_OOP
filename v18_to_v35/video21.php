<?php


class Iphones {
    public $name;
    public $ram;

    public function __construct($n,$r){
        $this->name = $n;
        $this->ram = $r;
        //echo "Object is created ";
    }
}

class Sony extends Iphone{

}


$phone = new Iphones("iphone",'5');
echo "<pre>";
print_r($phone);
echo "</pre>";


$sony = new Sony("sony",'7');
echo "<pre>";
print_r($sony);
echo "</pre>";