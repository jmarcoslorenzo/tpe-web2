<?php
/* Smarty version 4.2.1, created on 2022-10-18 00:05:24
  from 'C:\xampp\htdocs\tpe-web2\templates\formEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dd1a440c563_44509294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e08059acfa0933fba0f98d61c96fb0602ac9e24f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formEdit.tpl',
      1 => 1665961771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dd1a440c563_44509294 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form class="form" method="POST">
<div class="mb-3">
<label class="form-label">Campeón</label>
<input type="text" name="campeon" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Rareza</label>
<input type="text" name="rareza" class="form-control">
</div>
<div class="mb-3">
<label class="form-label">Afinidad</label>
<input type="text" name="afinidad" class="form-control">
</div>
<button type="submit" class="btn btn-primary mt-2">Editar Campeón</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
