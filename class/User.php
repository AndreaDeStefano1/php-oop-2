<?php 
class User{
  protected $name;
  protected $surname;
  protected $address;
  protected $mail;
  protected $phone;
  protected $discount;
  protected $cardNumber;
  protected $cardExpiry;
  
  public function __construct($_name, $_surname, $_address, $_mail, $_phone, $_discount, $_cardNumber, $_cardExpiry )
  {
    $this->name = $_name;
    $this->surname = $_surname;
    $this->address = $_address;    
    $this->mail = $_mail;
    $this->phone = $_phone;
    $this->discount = $_discount;
    $this->cardNumber = $_cardNumber;
    $this->cardExpiry = $_cardExpiry;
  }

  // Setter

  public function setName($_name){
    $this->name = $_name;
  }
  public function setSurame($_surname){
    $this->surname = $_surname;
  }
  public function setAddress($_address){
    $this->address = $_address;
  }
  public function setMail($_mail){
    $this->mail = $_mail;
  }
  public function setPhone($_phone){
    $this->phone = $_phone;
  }
  public function setDiscount($_discount){
    $this->discount = $_discount;
  }
  public function setCardNumber($_cardNumber){
    $this->cardNumber = $_cardNumber;
  }
  public function setCardExpiry($_cardExpiry){
    $this->cardExpiry = $_cardExpiry;
  }



  // Getter

  public function getName(){
    return $this->name;
  }
  public function getSurame(){
    return $this->surname;
  }
  public function getAddress(){
    return $this->address;
  }
  public function getMail(){
    return $this->mail;
  }
  public function getPhone(){
    return $this->phone;
  }
  public function getDiscount(){
    return $this->discount;
  }
  public function getCardNumber(){
    return $this->cardNumber;
  }
  public function getCardExpiry(){
    return $this->cardExpiry;
  }

 //validazione data carta di credito
}
?>