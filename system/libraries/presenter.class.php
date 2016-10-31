<?php

class presenter {

  public static function present($content){
    
    $layout = new view('layout');
    //add header
    $layout->header = new view ('header');
    //add navbar
    $layout->topmenu = '';
    //add footer 
    $layout->footer = '';
    //present the content within a wrapper
    
    $layout->content = $content;

    $html_wrapper = new view('html_wrapper');
    $html_wrapper->content = $layout;

    echo $html_wrapper;
  }

}