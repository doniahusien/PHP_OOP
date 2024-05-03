<?php

trait FingerPrint
{
    public function fingerFeatures()
    {
        echo "This is Finger Print Feature<br>";
    }
}


trait Touch
{
    public function ThreeDTouch()
    {
        echo "This is ThreeD Touch Feature<br>";
    }
}

trait Face
{
    public function FaceDetect()
    {
        echo "This is Face Detect Feature<br>";
    }
}
class OPPO
{
    use FingerPrint;
    use Touch;
    use Face;
}
class Samsung{
    use FingerPrint;
    use Touch;
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


$phone->fingerFeatures();
$phone->ThreeDTouch();
$phone->FaceDetect();
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