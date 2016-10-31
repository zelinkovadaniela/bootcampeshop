<?php

class contact_controller{

    public function run(){
     
    echo '<h1>Contact Controller</h1>';
    }

    public function wrapContentInHTML(){

    }
  }

  $smarty = view::smarty();
  //display the topmenu.tpl with the smarty object
  $smarty->display('topmenu.tpl'); 