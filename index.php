<?php

class Category{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }

    public function getHtml(){
        return(
            $this->getName() . '<br>'
            .$this->getAge() . '<br>'
        );
    }
}

class Product{
    private $name;
    private $price;
    private $description;
    private Category $category;

    public function __construct($name, $price, $description, Category $category){
        $this->setName($name);
        $this->setPrice($price);
        $this->setDescription($description);
        $this->setCategory($category);
    }

    
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    
    public function setPrice($price){
        $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }

    
    public function setDescription($descr){
        $this->description = $descr;
    }
    public function getDescription(){
        return $this->description;
    }

    
    public function setCategory(Category $category){
        $this->category = $category;
    }
    public function getCategory(){
        return $this->category->getHtml();
    }

    public function getHtml(){
        return(
            $this->getName() . '<br>'
            .$this->getPrice() . '<br>'
            .$this->getDescription() . '<br>'
            .$this->getCategory()
        );
    }
}

$cane_ad = new Category('Cane', 'Adulto');
$smt = new Product('ciao', '50', 'lorem ipsum', $cane_ad);
echo ($smt->getHtml());
