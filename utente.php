<?php 

require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/Toy.php';
require_once __DIR__ . '/class/Food.php';

$user = new User('Peppe', 'Priscolo', 'Via ciao, 123', 'peppe@mail.it', '33123232', '4026503412361111', 'December 2021' );

$cibo = new Food('Cibo per cani' , 90, 'lorem ipsum', 1 , 20, 235);
$gioco = new Toy('Osso', 10, 'lorem ipsum', 1 , 0);


?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> Dettagli Utente </h1>
  <ul>
    <li><?php echo $user->getName() ?></li>
    <li><?php echo $user->getSurname() ?></li>
    <li><?php echo $user->getAddress() ?></li>
    <li><?php echo $user->getMail() ?></li>
    <li><?php echo $user->getPhone() ?></li>
    <li><?php echo $user->getCardNumber() ?></li>
    <li><?php echo $user->getCardExpiry() ?></li>
  </ul>

  <h1>Carrello</h1>
  <ul>
    <li>
      <?php echo $cibo->getName() . ', ' . $cibo->getPrice() . '€' . ', '  . $cibo->getQuantity() . 'pz' ?>
    </li>
    <li>
      <?php echo $gioco->getName() . ', ' . $gioco->getPrice() . '€' . ', '  . $gioco->getQuantity() . 'pz' ?>
    </li>
    <li>Totale : <?php echo $user->getTotal(100) . 'paga ora' .$user->checkExpiry() ?></li>
  </ul>
 
</body>
</html>