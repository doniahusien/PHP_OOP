<?php

class Student{
    public $name;
    public $email;
    public function pressPower(){
        echo 'you pressed power<br>';
        return $this;
    }
    public function bootPhone(){
        echo 'the phone is booting now<br>';
        return $this;
    }
    public function sayWelcome(){
        echo 'Welcome to phone<br>';
        return $this;
    }
}
$student = new Student();
$student->bootPhone();
$student->pressPower();
$student->sayWelcome();


$student->pressPower()->bootPhone()->sayWelcome();
echo "<pre>";
print_r($student);
echo "</pre>";