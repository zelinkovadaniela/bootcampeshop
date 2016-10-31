BOOTCAMP ESHOP!
<?php

  define('DOCROOT', __DIR__);
  require (DOCROOT.'/system/config/bootstrap.php');

  request::loadRequest();
  $controller = router::getController();
       
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
     

     <?php
      include ($controller);
     ?> 
  </body>
</html>
