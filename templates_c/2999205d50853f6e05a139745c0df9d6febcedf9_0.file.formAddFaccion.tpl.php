<?php
/* Smarty version 4.2.1, created on 2022-10-17 16:18:09
  from 'C:\xampp\htdocs\tpe-web2\templates\formAddFaccion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d6421be55b7_73709502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2999205d50853f6e05a139745c0df9d6febcedf9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\formAddFaccion.tpl',
      1 => 1666016287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d6421be55b7_73709502 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['logged']->value) {?>
    <form class="form" action="addFacciones" method="POST">
    <div class="mb-3">
    <label class="form-label">Facción</label>
    <input type="text" name="faccion" class="form-control">
    </div>
    <div class="mb-3">
    <label class="form-label">Dominio</label>
    <input type="text" name="dominio" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Agregar Facción</button>
    </form
    <?php }
}
}
