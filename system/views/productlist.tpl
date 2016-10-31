PRODUCTLIST.tpl

{include file='header.tpl'}
<h1>Product List</h1>
   
<ul>
{foreach $products as $id => $product}
    <li><a href="product.php?id={$id}">{$product.name}</a></li>
{/foreach}
</ul>

 
