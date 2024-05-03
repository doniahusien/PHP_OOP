<?php

class Student{
    public static $name="samia";
    public static function sayHello(){
       // echo $this->name;
        return "hello<br>";
    }
}
$student = new Student();
//$student->$name;
echo $student->sayHello();
echo Student::sayHello();
echo Student::$name;