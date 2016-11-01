<?php

class category_controller {

  public function run(){
    
    $layout = new view ('category/layout');

    if(isset($_GET['category'])) // if there is a value with the name 'category' in the URL
    {
      $category_uri = $_GET['category']; // initialize the variable $page with that value
    } 
    else // in other case
    {
      $category_uri = null; // initialize the variable $category_uri with the value null
    }
    //select the category from the database based on $category_uri
    $query = "
    SELECT `category`.*
    FROM `category`
    WHERE `category`.`uri` = :category_uri
    LIMIT 1
    ";

    $substitution = array(
      ':category_uri' => $category_uri
    );

    $result = db::execute($query, $substitution);
    $category = $result->fetch();
    if(!$category){
    //end the execution of this controller and display a 404 error
    router::runController('error404');
    return;
    }
     
    $array_of_rows_from_fetchAll = $result->fetchAll();
   

    if (!$category_uri){
      //print the detail of the whole e-sjop
    }else{
      //print the detail of that category
    }

    presenter::present($layout);
  }
}