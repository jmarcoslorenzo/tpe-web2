<?php
/* Smarty version 4.2.1, created on 2022-10-18 04:54:29
  from 'C:\xampp\htdocs\tpe-web2\templates\tableFacc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634e15653fd962_50318280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9767ae9f983f445a366a8a7bd8db1a1e1e875faf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\tableFacc.tpl',
      1 => 1666061667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formAddFaccion.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634e15653fd962_50318280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table">
  <thead>
    <tr>
    <th scope='col'>ID</th>
    <th scope='col'>Faccion</th>
    <th scope='col'>Dominio</th>
    <th scope='col'></th>
    <th scope='col'></th>
    <th scope='col'></th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facciones']->value, 'faccion');
$_smarty_tpl->tpl_vars['faccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['faccion']->value) {
$_smarty_tpl->tpl_vars['faccion']->do_else = false;
?>
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['faccion']->value->id_faccion;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['faccion']->value->faccion;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['faccion']->value->dominio;?>
</td>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <td><a href='formEditFacc/<?php echo $_smarty_tpl->tpl_vars['faccion']->value->id_faccion;?>
' type='button'>Editar</a></td>
      <td><a href='deleteFacciones/<?php echo $_smarty_tpl->tpl_vars['faccion']->value->id_faccion;?>
' type='button'>Eliminar</a></td>
    <?php }?>

    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
<h3> Selecciona una faccion para filtrar sus campeones</h3>
<form method="POST" action="filter">
        <select name="selected" class="form-selected">                                              
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facciones']->value, 'faccion');
$_smarty_tpl->tpl_vars['faccion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['faccion']->value) {
$_smarty_tpl->tpl_vars['faccion']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['faccion']->value->id_faccion;?>
"><?php echo $_smarty_tpl->tpl_vars['faccion']->value->faccion;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        <button type="submit"> Elegir </button>
    </form>
<?php $_smarty_tpl->_subTemplateRender("file:formAddFaccion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
