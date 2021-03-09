<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 14:39:50
  from 'module:paypalviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffedc068148d1_96278378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2e04d6622831e93c0038e945fd286e24def7782' => 
    array (
      0 => 'module:paypalviewstemplatesfront',
      1 => 1610536889,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffedc068148d1_96278378 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You will be redirected to the PayPal website to process your card payment.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'PayPal secures your payment and protect your financial information with strong encryption tools.','mod'=>'paypal'),$_smarty_tpl ) );?>
</p>
<?php }
}
