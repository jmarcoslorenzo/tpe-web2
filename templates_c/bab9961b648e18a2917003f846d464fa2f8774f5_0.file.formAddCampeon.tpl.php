<?php
/* Smarty version 4.2.1, created on 2022-10-15 15:20:57
  from 'C:\xampp\htdocs\tpe-web2\templates\formAddCampeon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634ab3b92e1646_18536546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bab9961b648e18a2917003f846d464fa2f8774f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formAddCampeon.tpl',
      1 => 1665840053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ab3b92e1646_18536546 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['logged']->value) {?>
<form class="form" action="add" method="POST">
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
<button type="submit" class="btn btn-primary mt-2">Agregar Campeón</button>
</form
<?php }
}
}
