<?php
/* Smarty version 3.1.30, created on 2016-10-31 15:17:39
  from "/Users/Danielka/bootcampeshop/system/views/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58175283b5cff5_34862366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb0d5cc4d26ff0d80bbd481ffc70c15883539743' => 
    array (
      0 => '/Users/Danielka/bootcampeshop/system/views/index.tpl',
      1 => 1477923450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58175283b5cff5_34862366 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['heading']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>


<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'result');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['result']->value) {
?>
  <li>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['result']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

  </li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ul><?php }
}
