<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
  private $weight;
  private $calories;

  public function __construct($_name, $_price, $_description, $_quantity, $_weight, $_calories)
  {

    parent::__construct($_name, $_price, $_description, $_quantity);

    $this->weight = $_weight;
    $this->calories = $_calories;

  }


  // Setter
  public function setWeight($_weight){
    $this->weight = $_weight;
  }
  public function setCalories($_calories){
    $this->calories = $_calories;
  }
  // Getter
  public function getWeight(){
    return $this->weight;
  }
  public function getCalories(){
    return $this->calories;
  }
}
?>