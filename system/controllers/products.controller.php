<?php


class products_controller {

  public function run(){
    echo '<h1>Products Controller</h1>';
  }
}

$smarty = view::smarty();
  //display the topmenu.tpl with the smarty object
$smarty->display('topmenu.tpl'); 