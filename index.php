<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
  <title>Document</title>
</head>
<body>
  <h1 class="text-center">Acquisti</h1>
  <div class="container">
    <ul class="d-flex justify-content-around ">
      <li>
        <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/utenteregistrato.php">Acquisti utente registrato</a> 
      </li>
      <li>
        <a href="http://<?php echo $_SERVER['HTTP_HOST'] ?>/php-oop-2/utente.php">Acquisti utente non registrato</a>
      </li>
    </ul>
  </div>
  
</body>
</html>