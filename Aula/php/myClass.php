<?php

class Animal {
    public $name;
    private $age;


    function __construct($name, $age){
        $this -> name = $name;
        $this -> age = $age;
    }


    function getName(){
        return $this -> name;
    }
    
    function getAge(){
        return $this -> age;
    }


    function setName($name){
        $this -> name = $name;
    }

    function setAge($age){
        $this -> age = $age;
    }
}


class Mammal extends Animal {
    public $hasFur;
    public static $peso = 5000;

    public static function communicate(){
        return "Mamifero se comunicando";
    }
}

?>