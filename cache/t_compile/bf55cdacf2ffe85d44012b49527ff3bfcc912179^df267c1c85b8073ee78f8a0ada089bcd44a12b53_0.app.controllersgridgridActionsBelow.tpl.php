<?php
/* Smarty version 4.3.1, created on 2025-02-05 18:03:17
  from 'app:controllersgridgridActionsBelow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67a399d53c1094_81164843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df267c1c85b8073ee78f8a0ada089bcd44a12b53' => 
    array (
      0 => 'app:controllersgridgridActionsBelow.tpl',
      1 => 1732910728,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:linkAction/linkAction.tpl' => 1,
  ),
),false)) {
function content_67a399d53c1094_81164843 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ul class="actions btm">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grid']->value->getActions((defined('GRID_ACTION_POSITION_BELOW') ? constant('GRID_ACTION_POSITION_BELOW') : null)), 'action');
$_smarty_tpl->tpl_vars['action']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->do_else = false;
?>
		<li>
			<?php $_smarty_tpl->_subTemplateRender("app:linkAction/linkAction.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('action'=>$_smarty_tpl->tpl_vars['action']->value,'contextId'=>$_smarty_tpl->tpl_vars['gridId']->value), 0, true);
?>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
