<?php

class request {
  
  protected static $original_post = array();
  protected static $original_get = array();


  public static function loadRequest(){
  //will load all the request information into itself
    static::$original_post = $_POST;
    static::$original_get = $_GET; 
  }
  public static function post($key, $default = null){
    //returns the value from $_GET with the key $key
    //if not present in $_GET
    return isset(static::$original_post[$key]) ? static::$original_post[$key] : $default;
  }
  public static function get($key, $default = null){
    //returns the value from $_GET with the key $key
    //if not present in $_GET
    return isset($original_get[$key]) ? $original_get[$key] : $default;
  }
  public static function isPost(){
    return ($_SERVER['REQUEST_METHOD'] =='POST');
  }
}