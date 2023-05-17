<?php
require_once 'animal.php';

class Cat extends animal{

    public function __construct($name){
        $this->name = $name;
    }

    public function getInfo(){
        echo "Hewan ini adalah ".$this->name." jenis kucing. Kucing adalah hewan yang suka bermain dan bersih.";
    }
}

class Dog extends animal{
    public function __construct($name){
        $this->name = $name;
    }

    public function getInfo(){
        echo "Hewan ini adalah ".$this->name." jenis anjing. Anjing adalah hewan yang setia dan cerdas.";
    }
}

$animal = new Animal("Harimau", "Karnivora");
echo $animal->getInfo()."<br>";

$cat = new Cat("Kitty");
echo $cat->getInfo()."<br>";

$dog = new Dog("Buddy");
echo $dog->getInfo()."<br>";

?>