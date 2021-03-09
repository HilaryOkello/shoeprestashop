<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-13 06:08:46
  from 'module:paypalviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ffee2ce6b6812_65432594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8aae06b74c347ba1d8da54e2a9d5a9f73bac7c7' => 
    array (
      0 => 'module:paypalviewstemplatesfront',
      1 => 1610536889,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5ffee2ce6b6812_65432594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!-- Header part menu -->
<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21379285495ffee2ce698c57_97099395', 'head');
?>

</head>

<body>
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

<main>
    <!-- Menu part-->
    <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2647697155ffee2ce69f418_06709149', 'header');
?>

    </header>

    <!-- Header part ends -->

    <section id="wrapper">
        <div class="container">

            <section id="main">
                <section id="content" class="page-content card card-block">
                    <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <h2><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Error in Paypal','mod'=>'paypal'),$_smarty_tpl ) );?>
</h2>

                    <div class="table-responsive-row clearfix">
                        <p class="paypal_error_msg">
                            <?php if ($_smarty_tpl->tpl_vars['error_msg']->value == '' && $_smarty_tpl->tpl_vars['msg_long']->value == '') {?>
                                <?php if ($_smarty_tpl->tpl_vars['error_code']->value) {?><span class="code">[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error_code']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]</span><?php }?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unexpected error occurred. Please contact shop administrator.','mod'=>'paypal'),$_smarty_tpl ) );?>

                            <?php } else { ?>
                                <?php if ($_smarty_tpl->tpl_vars['error_code']->value) {?><span class="code">[<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error_code']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
]</span><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['error_msg']->value) {?><span class="short"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error_msg']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                                <br>
                                <?php if ($_smarty_tpl->tpl_vars['msg_long']->value && $_smarty_tpl->tpl_vars['msg_long']->value != $_smarty_tpl->tpl_vars['error_msg']->value) {?>
                                    <span class="long"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Additional error message : ','mod'=>'paypal'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['msg_long']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                <?php }?>
                            <?php }?>
                        </p>
                        <?php if ($_smarty_tpl->tpl_vars['show_retry']->value) {?>
                            <a class="btn btn-secondary" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Try to pay again','mod'=>'paypal'),$_smarty_tpl ) );?>
</a>
                        <?php }?>
                    </div>
                </section>
            </section>
        </div>
    </section>
    <!-- Footer starts -->

    <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14922149175ffee2ce6b3783_82272124', "footer");
?>

    </footer>
    <!-- Footer Ends -->
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4128903675ffee2ce6b4a29_40205669', 'javascript_bottom');
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

</main>

</body>

<?php }
/* {block 'head'} */
class Block_21379285495ffee2ce698c57_97099395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_21379285495ffee2ce698c57_97099395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_2647697155ffee2ce69f418_06709149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2647697155ffee2ce69f418_06709149',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block "footer"} */
class Block_14922149175ffee2ce6b3783_82272124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_14922149175ffee2ce6b3783_82272124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_4128903675ffee2ce6b4a29_40205669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_4128903675ffee2ce6b4a29_40205669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
}
