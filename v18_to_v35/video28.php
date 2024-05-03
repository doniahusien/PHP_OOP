<?php
class OPPO
{
    public $feature1;
    public $feature2;
}
class Samsung
{
    public $feature3;
    public $feature4;
}

class NewPhone extends OPPO{

}


$phone = new NewPhone();
echo "<pre>";
print_r($phone);
echo "</pre>";