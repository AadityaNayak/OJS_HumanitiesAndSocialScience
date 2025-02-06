<?php
/* Smarty version 4.3.1, created on 2025-02-05 18:37:11
  from 'app:managementtoolspermissions.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67a3a1c7500c19_39850556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c49a56e4c636672390375cf02c50b6e8fe066d39' => 
    array (
      0 => 'app:managementtoolspermissions.tpl',
      1 => 1732910728,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3a1c7500c19_39850556 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
$(function() {
	// Attach the form handler.
	$('#resetPermissionsForm').pkpHandler(
		'$.pkp.controllers.form.AjaxFormHandler',
		{
			confirmText: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.resetPermissions.confirm"),$_smarty_tpl ) ) ));?>
,
		}
	);
});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="resetPermissionsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"management",'op'=>"tools",'path'=>"resetPermissions"),$_smarty_tpl ) );?>
">
	<div class="pkp_page_content pkp_page_permissions">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.resetPermissions"),$_smarty_tpl ) );?>
</h3>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.resetPermissions.description"),$_smarty_tpl ) );?>
</p>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"submit",'id'=>"resetPermissionsFormButton",'label'=>"manager.setup.resetPermissions"),$_smarty_tpl ) );?>

	</div>
</form>
<?php }
}
