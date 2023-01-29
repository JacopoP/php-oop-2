<?php

class Category{
    private $name;
    private $description;
    private $age;

    public function __contruct($name, $descr, $age){
        setName($name);
        setDescription($descr);
        setAge($age);
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setDescription($descr){
        $this->descr = $descr;
    }
    public function getDescription(){
        return $this->descr;
    }

    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }

    public function getHtml(){
        return(
            getName() . '<br>'
            .getDescription() . '<br>'
            .getAge() . '<br>'
        );
    }
}
