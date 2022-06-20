<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product{
  private $age;

  public function __construct($_name, $_price, $_description, $_quantity, $_age)
  {

    parent::__construct($_name, $_price, $_description, $_quantity);

    $this->age = $_age;

  }


  // Setter
  public function setAge($_age){
    $this->age = $_age;
  }
  // Getter
  public function getAge(){
    return $this->age;
  }
}
?>