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

class Food extends Product{
    private $weight;
    private $type;
    private array $ingredients;
    private $expiration_date;

    public function __construct($name, $price, $description, Category $category, $weight, $type, array $ingredients, $date){
        parent:: __construct($name, $price, $description, $category);
        $this->setWeight($weight);
        $this->setType($type);
        $this->setIngredients($ingredients);
        $this->setExpDate($date);
    }

    public function setWeight($weight){
        $this->weight = $weight;
    }
    public function getWeight(){
        return $this->weight;
    }

    public function setType($type){
        $this->type = $type;
    }
    public function getType(){
        return $this->type;
    }

    public function setIngredients(array $ingredients){
        $this->ingredients = $ingredients;
    }
    public function getIngredients(){
        $str;
        foreach($this->ingredients as $ingredient){
            $str.= $ingredient .' ';
        }
        return $str;
    }

    public function setExpDate($date){
        $this->date = $date;
    }
    public function getExpDate(){
        return $this->date;
    }

    public function GetHtml(){
        return(
            parent:: getHtml() 
            .$this->getWeight() . '<br>'
            .$this->getType() . '<br>'
            .$this->getIngredients() . '<br>'
            .$this->getExpDate() . '<br>'
        );
    }
}

$cane_ad = new Category('Cane', 'Adulto');
$smt = new Food('ciao', '50', 'lorem ipsum', $cane_ad, 'abbastanza', 'secco', ['manzo', 'riso'], '2023-2-06');
echo ($smt->getHtml());
