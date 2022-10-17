<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:12:03
  from 'C:\xampp\htdocs\tpe-web2\templates\campeonFilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d70c3990524_69023969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdad93574b6475b6c6d306408424ad3fdd2a10c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\campeonFilter.tpl',
      1 => 1666019522,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d70c3990524_69023969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Campeones por Facciones</h1>
<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campeones']->value, 'campeon');
$_smarty_tpl->tpl_vars['campeon']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campeon']->value) {
$_smarty_tpl->tpl_vars['campeon']->do_else = false;
?>
    <li><?php echo $_smarty_tpl->tpl_vars['campeones']->value->campeon;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['campeones']->value->rareza;?>
</li>
    <li><?php echo $_smarty_tpl->tpl_vars['campeones']->value->afinidad;?>
</li>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<a href="item" type="button" class="btn btn-link">Volver a la tabla</a>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
