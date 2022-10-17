<?php
/* Smarty version 4.2.1, created on 2022-10-17 15:58:57
  from 'C:\xampp\htdocs\tpe-web2\templates\formEditFacc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d5fa122b0e4_21403342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04c25af5b0a3d0259cc4afbcb10ede1a0339a24e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formEditFacc.tpl',
      1 => 1666015120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d5fa122b0e4_21403342 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h5>Editar Facción</5>
<form class="form" method="POST">
<div class="mb-3">
<label class="form-label">Facción</label>
<input type="text" name="faccion" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Dominio</label>
<input type="text" name="dominio" class="form-control">
</div>
<button type="submit" class="btn btn-primary mt-2">Editar Facción</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
