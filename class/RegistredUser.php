<?php
require_once __DIR__ . '/User.php';

class RegistredUser extends User{
  private $username;
  private $password;

  public function __construct($_name, $_surname, $_address, $_mail, $_phone, $_discount, $_cardNumber, $_cardExpiry, $_username, $_password)
  {
    parent::__construct($_name, $_surname, $_address, $_mail, $_phone, $_discount, $_cardNumber, $_cardExpiry);

    $this->username = $_username;
    $this->password = $_password;

  }




  public function getDiscount(){
    if(isset($username) && isset($password) )
    $this->discount = 20;
    return $this->discount;
  }
}