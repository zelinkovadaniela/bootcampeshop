<?php

  //creates a new smarty object
  $smarty = view::smarty();
  //display the topmenu.tpl with the smarty object
  $smarty->display('topmenu.tpl'); 

  //prepares the query to select all products from the table products
  $query = "
    SELECT `product`.*
    FROM `product`
    ";
  //executes the query to elect all products and stores it in the $result
  $results = db::execute($query);

  $smarty = view::smarty();
  $smarty->assign('heading', 'My heading');
  $smarty->assign('results', $results);
  $smarty->display('index.tpl'); 
?>