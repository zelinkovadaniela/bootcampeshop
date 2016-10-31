<?php
/* Smarty version 3.1.30, created on 2016-10-28 11:44:52
  from "/Users/Danielka/bootcampeshop/system/views/product.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58131e1479bc85_01747624',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb2f350cf4c8cd8bf69d9b36cf487c228719f27' => 
    array (
      0 => '/Users/Danielka/bootcampeshop/system/views/product.tpl',
      1 => 1477577829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_58131e1479bc85_01747624 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Product</h1>
<em><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
, <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['color'], ENT_QUOTES, 'UTF-8', true);?>
</em>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
