<?php
var_dump($products->fetchAll()); ?>

<ul>
  <?php foreach($products as $product): ?>
  <li>
    <?php echo $product['name']; ?>
    <div class= "price" 
  </li>
</ul>