<?php


trait FingerPrint
{
    public function fingerFeatures()
    {
        echo "This is Finger Print Feature<br>";
        return $this;
    }
}

trait Touch
{
    public function ThreeDTouch()
    {
        echo "This is ThreeD Touch Feature<br>";
        return $this;

    }
}

trait Face
{
    public function FaceDetect()
    {
        echo "This is Face Detect Feature<br>";
        return $this;
    }
}
/*
trait AllFeatures{
    use FingerPrint;
    use Face;
    use Touch;
}

*/

trait AllFeatures{
    use FingerPrint,Touch,Face;
}

class OPPO
{
    use AllFeatures;
}
class Samsung{
    use FingerPrint,Touch;
}
class Nokia{
    use Face;
    public function sayHello(){
        echo "HELLO";
    }
}

$phone = new OPPO();
$samsung = new Samsung();
$nokia = new Nokia();


$phone->fingerFeatures()->ThreeDTouch()->FaceDetect();

echo "<pre>";
print_r($phone);
echo "</pre>";

echo "<pre>";
print_r($samsung);
echo "</pre>";

$nokia->FaceDetect();
$nokia->sayHello();
echo "<pre>";
print_r($nokia);
echo "</pre>";


trait MyFeature{
    public function sayHello(){
        echo "Hello from trait";
    }
}


class MyDevice{
    public function sayHello(){
        echo "Hello from device";
    }
}

class Apple extends MyDevice{
    use MyFeature;
}

$mydevice = new Apple();
$mydevice->sayHello();//trait