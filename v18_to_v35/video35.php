<?php


spl_autoload_register(function ($class) {
    require 'classes/' . $class.".class.php";
});
$var = new Testing1();
$var2= new Testing2();
//$var2= new Test();

print_r($var);
print_r($var2);