<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 14:24:29
  from 'C:\xampp\htdocs\prestashop\modules\paypal\views\templates\admin\_partials\statusBlock.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffed86d4195f8_56926365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d69860327e5a26e21ab624a31e6ae8ed7a1e79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\paypal\\views\\templates\\admin\\_partials\\statusBlock.tpl',
      1 => 1610536889,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffed86d4195f8_56926365 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div>
    <p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchant Country:','mod'=>'paypal'),$_smarty_tpl ) );?>
 <b><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['merchantCountry']->value,'htmlall','utf-8' ));?>
</b>
    </p>

    <p>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To  modify country: [a @href1@]International > Localization[/a]','mod'=>'paypal'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminLocalization',true);
$_prefixVariable2 = ob_get_clean();
ob_start();
echo 'target="blank"';
$_prefixVariable3 = ob_get_clean();
echo smarty_modifier_paypalreplace($_prefixVariable1,array('@href1@'=>$_prefixVariable2,'@target@'=>$_prefixVariable3));?>

    </p>

    <p>
        <span class="btn btn-default" id="btn-check-requirements"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Check requirements','mod'=>'paypal'),$_smarty_tpl ) );?>
</span>
    </p>

    <ul class="list-unstyled">
        <li>
            <?php if (isset($_smarty_tpl->tpl_vars['sslActivated']->value) && $_smarty_tpl->tpl_vars['sslActivated']->value) {?>
                <i class="icon-check text-success"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SSL enabled.','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php } else { ?>
                <i class="icon-remove text-danger"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'SSL should be enabled on your website.','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php }?>
        </li>

        <li>
            <?php if (isset($_smarty_tpl->tpl_vars['tlsVersion']->value) && $_smarty_tpl->tpl_vars['tlsVersion']->value['status']) {?>
                <i class="icon-check text-success"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The PHP cURL extension must be enabled on your server. Please contact your hosting provider for more information.','mod'=>'paypal'),$_smarty_tpl ) );?>

            <?php } elseif (isset($_smarty_tpl->tpl_vars['tlsVersion']->value) && $_smarty_tpl->tpl_vars['tlsVersion']->value['status'] == false) {?>
                <i class="icon-remove text-danger"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The PHP cURL extension must be enabled on your server. Please contact your hosting provider for more information.','mod'=>'paypal'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['tlsVersion']->value['error_message'];?>

            <?php }?>

        </li>

        <li>
            <?php if (isset($_smarty_tpl->tpl_vars['accountConfigured']->value) && $_smarty_tpl->tpl_vars['accountConfigured']->value) {?>
                <i class="icon-check text-success"></i>
            <?php } else { ?>
                <i class="icon-remove text-danger"></i>
            <?php }?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must connect your PayPal account','mod'=>'paypal'),$_smarty_tpl ) );?>

        </li>
    </ul>
</div>



<?php }
}
