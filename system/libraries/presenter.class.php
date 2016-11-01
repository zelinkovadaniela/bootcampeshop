<?php

class presenter {

  public static function present($content){
    
    $layout = new view('layout');
    //add header
    $layout->header = new view ('header');
    //add navbar
    $layout->topmenu = new view ('topmenu');
    //add footer 
    $layout->footer = new view ('footer');
    //present the content within a wrapper
    
    $layout->content = $content;

    $html_wrapper = new view('html_wrapper');
    $html_wrapper->content = $layout;

    echo $html_wrapper;
  }

}