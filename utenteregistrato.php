<?php 

require_once __DIR__ . '/class/RegistredUser.php';
require_once __DIR__ . '/class/Toy.php';
require_once __DIR__ . '/class/Food.php';

$user = new RegistredUser('Paolo', 'Sarti', 'Via bho, 3', 'paolino@mail.it', '336655732', '4026503456483946', 'August 2026', 'Pippo', 'pasw' );

$cibo = new Food('Cibo per gatti' , 80, 'lorem ipsum', 1 , 25, 335);
$gioco = new Toy('Gomitolo', 10, 'lorem ipsum', 1 , 0);


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
    <li><?php echo $user->getUserame() ?></li>
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
    <li>Totale : <?php echo $user->getTotal(100) .  '€ '  ?> </li>
    <li><?php  $user->checkExpiry($user->getCardExpiry())  ?></li>
  </ul>
 
</body>
</html>