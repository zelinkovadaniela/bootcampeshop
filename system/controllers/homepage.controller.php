<?php


  class homepage_controller{

    public function run(){

      $homepage = new view('homepage/hompage');
      $homepage->top_products = new view('homepage/top_products');
      $query = "
      SELECT `product` .*
      FROM `product`
      WHERE `product`.`is_top` = 1
      ORDER BY `product`.`name` ASC
      ";
      $results = db::execute($query);
      $homepage->top_products->products = $results;

      $homepage->categories = 'Categories';
      $homepage->shop_info = 'Shop_Info';

      presenter::present($homepage);
    } 
  }
?>