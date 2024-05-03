<?php

require 'sony.php';
require 'apple.php';
require 'lg.php';


$apple = new apple\Hardware\Phones\CreatePhone();
$apple->sayHello();

$tablet = new apple\Hardware\Tablets\CreateTablet();
$tablet->sayHello();