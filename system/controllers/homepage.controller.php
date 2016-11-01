<?php


  class homepage_controller{

    public function run(){

      $homepage = new view('homepage/homepage');

      $top_products = new view('homepage/top_products');
      $query = "
      SELECT `product` .*
      FROM `product`
      WHERE `product`.`is_top` = 1
      ORDER BY `product`.`name` ASC
      ";
      $results = db::execute($query);
      $top_products->products = $results;
      $homepage->top_products = $top_products;

      $categories = new view('homepage/categories');
      $query = "
      SELECT `category`.*
      FROM `category`
      WHERE `category`.`parent_id` IS NULL
      ORDER BY `category`.`name` ASC
      ";
      $results = db::execute($query);
      $categories->categories = $results;
      $homepage->categories = $categories;

      $homepage->shop_info = new view ('homepage/shop_Info');

      presenter::present($homepage);
    } 
  }
?>