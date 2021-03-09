<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 14:24:28
  from 'C:\xampp\htdocs\prestashop\modules\paypal\views\templates\admin\_partials\alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffed86ccc2b65_72505562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ba63060bfb41b8da8f4324dab391b75e8924bd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\admin\\_partials\\alert.tpl',
      1 => 1610536889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffed86ccc2b65_72505562 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 <?php if (isset($_smarty_tpl->tpl_vars['widthByContent']->value) && $_smarty_tpl->tpl_vars['widthByContent']->value) {?>d-inline-block<?php }?> <?php if (isset($_smarty_tpl->tpl_vars['class']->value) && $_smarty_tpl->tpl_vars['class']->value) {?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 <?php }?>">
    <?php if (isset($_smarty_tpl->tpl_vars['btnClose']->value) && $_smarty_tpl->tpl_vars['btnClose']->value) {?>
        <button type="button" class="close" data-dismiss="alert">×</button>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

</div>
<?php }
}
