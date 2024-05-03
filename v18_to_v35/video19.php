<?php


interface Mobile{
    public function pressHome();
}
class Iphone implements Mobile{
    public function pressHome(){
        echo 'You close Apps';

    }
}

/*
class Sony implements Mobile{
    public function pressHome(){
        echo 'You Oppen Apps';
    }
}
*/ 


$iphone = new Iphone();
$iphone->pressHome();
echo "<pre>";
print_r($iphone);
echo "</pre>";


/*$sony = new Sony();
$iphone->pressHome();
echo "<pre>";
print_r($sony);
echo "</pre>";
*/


interface DBConnects{
    public function getArticles();
    public function getUsers();
    public function showStats();
}

class MySQL implements DBConnects{
    public function getArticles(){
        echo "SELECT * FROM articles <br>";
    }
    public function getUsers(){
        echo "SELECT * FROM users <br>";
    }
    public function showStats(){
        echo "SELECT * FROM stats";

    }
}

class Orcal implements DBConnects{
    public function getArticles(){
        echo "Hi FROM articles <br>";
    }
    public function getUsers(){
        echo "Hi FROM users <br>";
    }
    public function showStats(){
        echo "Hi FROM stats";
    }
}



$row = new MySQL();
$row->getUsers();
$row->getArticles();
$row->showStats();
echo "<pre>";
print_r($row);
echo "</pre>";

$row = new Orcal();
$row->getUsers();
$row->getArticles();
$row->showStats();
echo "<pre>";
print_r($row);
echo "</pre>";

