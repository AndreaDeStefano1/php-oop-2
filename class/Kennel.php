<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product{
  private $size;
  private $material;

  public function __construct($_name, $_price, $_description, $_quantity, $_size, $_material)
  {

    parent::__construct($_name, $_price, $_description, $_quantity);

    $this->size = $_size;
    $this->material = $_material;

  }


  // Setter
  public function setSize($_size){
    $this->size = $_size;
  }
  public function setMaterial($_material){
    $this->material = $_material;
  }
  // Getter
  public function getSize(){
    return $this->size;
  }
  public function getMaterial(){
    return $this->material;
  }
}
?>