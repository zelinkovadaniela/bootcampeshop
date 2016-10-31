<?php

  define('DOCROOT', __DIR__);
  require (DOCROOT.'/system/config/bootstrap.php');

  request::loadRequest();
  $controller_name = router::getControllerName();

  $controller_file = router::getControllerFile($controller_name);
 
  $controller_class = $controller_name.'_controller';

  
  
  include ($controller_file);

  $controller = new $controller_class();
  $controller->run();

?>


