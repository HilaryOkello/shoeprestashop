<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 14:24:14
  from 'C:\xampp\htdocs\prestashop\admin595m68bhv\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffed85ecefe24_07312888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3660ef0188b36530fc9e829c507aa403cb579f9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin595m68bhv\\themes\\default\\template\\content.tpl',
      1 => 1610363806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffed85ecefe24_07312888 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
