<?php

class Product{
    private $price;
    private $weight;

    public function __construct( $price, $weight){
        $this->price = $price;
        $this->weight = $weight;
    }

    public function getWeight(){
        return $this->weight;
    }
}

class Shepping{
    private $totatShipping;

    public function calculateTotalShipping($weight, $pricePerKG){
        return $weight * $pricePerKG;
    }
}

$p = new Product(5,2);


var_dump($p);