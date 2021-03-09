<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 14:24:29
  from 'C:\xampp\htdocs\prestashop\modules\paypal\views\templates\admin\_partials\messages\roundingSettingsMessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffed86d64c2f9_90535759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69f05e9309487345d0c1f7ddf5f99136cd226cc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\admin\\_partials\\messages\\roundingSettingsMessage.tpl',
      1 => 1610536889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../_partials/roundingSettings.tpl' => 1,
  ),
),false)) {
function content_5ffed86d64c2f9_90535759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('variant', (($tmp = @$_smarty_tpl->tpl_vars['variant']->value)===null||$tmp==='' ? 'normal' : $tmp));?>

<div class="alert alert-warning <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('hidden'=>$_smarty_tpl->tpl_vars['variant']->value == 'hidden') ));?>
" data-rounding-alert>
  <button type="button" class="close" data-dismiss="alert">×</button>
    <div>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your rounding settings are not fully compatible with PayPal requirements. In order to avoid some of the transactions to fail, please change the PrestaShop rounding mode in [a @href1@] Preferences > General[/a] to:','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable4 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPreferences',true);
$_prefixVariable5 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable6 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable4,array('@href1@'=>$_prefixVariable5,'@target@'=>$_prefixVariable6));?>

    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:../../_partials/roundingSettings.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
<?php }
}
