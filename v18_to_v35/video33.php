<?php

require 'sony.php';
require 'apple.php';
require 'lg.php';


$iphone = new sony\CreatePhone();
$iphone->sayHello();

$lg = new lg\CreatePhone();
$lg->sayHello();
print_r($iphone);