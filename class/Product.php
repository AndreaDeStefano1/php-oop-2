<?php 
class Product{
  protected $name;
  protected $price;
  protected $description;
  protected $quantity;

  public function __construct($_name, $_price, $_description, $_quantity)
  {
    $this->name = $_name;
    $this->price = $_price;
    $this->description = $_description;    
    $this->quantity = $_quantity;
  }

  // Setter

  public function setName($_name){
    $this->name = $_name;
  }
  public function setPrice($_price){
    $this->price = $_price;
  }
  public function setDescription($_description){
    $this->description = $_description;
  }
  public function setQuantity($_quantity){
    $this->quantity = $_quantity;
  }

  // Getter

  public function getName(){
    return $this->name;
  }
  public function getPrice(){
    return $this->price;
  }
  public function getDescription(){
    return $this->description;
  }
  public function getQuantity(){
    return $this->quantity;
  }

}

?>