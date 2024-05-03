<?php
trait MyFeature1{
    public function feature(){
        echo "Hello feature1";
    }
}

trait MyFeature2{
    public function feature(){
        echo "Hello feature2";
    }
}


class Apple{
    use MyFeature1,MyFeature2{
        MyFeature2::feature as nm;
        MyFeature2::feature insteadof MyFeature1;
    }
}

$mydevice = new Apple();
$mydevice->nm();

echo "<pre>";
print_r($mydevice);
echo "</pre>";