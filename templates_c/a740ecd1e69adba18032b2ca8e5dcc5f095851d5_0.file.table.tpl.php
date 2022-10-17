<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:29:03
  from 'C:\xampp\htdocs\tpe-web2\templates\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d74bf7435c6_40011562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a740ecd1e69adba18032b2ca8e5dcc5f095851d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\table.tpl',
      1 => 1666020541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:formAddCampeon.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634d74bf7435c6_40011562 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<table class="table">
  <thead>
    <tr>
    <th scope='col'>id</th>
    <th scope='col'>Campeon</th>
    <th scope='col'>Rareza</th>
    <th scope='col'>Afinidad</th>
    <th scope='col'></th>
    <th scope='col'></th>
    <th scope='col'></th>
    </tr>
  </thead>
  <tbody>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['campeon']->value, 'campeones');
$_smarty_tpl->tpl_vars['campeones']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['campeones']->value) {
$_smarty_tpl->tpl_vars['campeones']->do_else = false;
?>
    <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['campeones']->value->id;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['campeones']->value->campeon;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['campeones']->value->rareza;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['campeones']->value->afinidad;?>
</td>
    <td><a href='detalle/<?php echo $_smarty_tpl->tpl_vars['campeones']->value->id;?>
' type='button'>Detalles</a></td>
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <td><a href='formEdit/<?php echo $_smarty_tpl->tpl_vars['campeones']->value->id;?>
' type='button'>Editar</a></td>
      <td><a href='delete/<?php echo $_smarty_tpl->tpl_vars['campeones']->value->id;?>
' type='button'>Eliminar</a></td>
    <?php }?>

    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>

<form method="POST" action="filter">
    <h3> Selecciona una faccion para filtrar sus campeones</h3>
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

<?php $_smarty_tpl->_subTemplateRender("file:formAddCampeon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
