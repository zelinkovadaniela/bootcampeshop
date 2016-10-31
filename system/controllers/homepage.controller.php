HOMEPAGE

<form method="post" action="">
  <input type="text" name="min_price" value="" />
  <input type="submit" value="Submit" />
</form>

<?php

if(!empty($_POST['min_price']))
{
  $min_price = (float)$_POST['min_price'];
}

if(!empty($min_price))
{
  $min_price_condition = " `price` > :min_price";
}
else
{
  $min_price_condition = "1";
  $min_price = null;
}

$query = "

  SELECT `product`.*
  FROM `product`
  WHERE {$min_price_condition}

";

  $substitution = array(
    ':min_price' => $min_price
  );
$result = db::execute($query, $substitution);
var_dump($min_price_condition);
var_dump($result->fetchAll());


$query = "
  SELECT `category`.*
  FROM `category`
";


  $result = db::execute($query);
  var_dump($result->fetchAll());

?>
<?php $smarty->display('index.tpl'); ?>

<?php
$index_tpl_rendered = $smarty->fetch('index.tpl');
var_dump($index_tpl_rendered);
?>