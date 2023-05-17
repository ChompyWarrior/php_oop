<?php

class Animal{
    //property

    public $name;
    public $jenis;

    public function __construct($name, $jenis){
        $this->name = $name;
        $this->jenis = $jenis;

    }

    public function getInfo(){
        echo "Hewan ini adalah ".$this->name." jenis ".$this->jenis.".";
    }

}


?>