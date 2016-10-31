<?php

  class homepage_controller{

    public function run(){

  
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
  $smarty->assign('heading', 'Homepage Controller');
  $smarty->assign('results', $results);
  $index_tpl_contents = $smarty->fetch('index.tpl'); 

  presenter::present($index_tpl_contents);

  $footer = new view('footer');
  $footer->current_date = date('j. n. Y');
  $footer->menu = view::smarty()->fetch('topmenu.tpl');
  echo $footer;

    }

   public function wrapContentsInHTML($content){
     $wrapper = new view('html_wrapper');
     $wrapper->content = $content;
     return $wrapper;
    } 
  }
?>