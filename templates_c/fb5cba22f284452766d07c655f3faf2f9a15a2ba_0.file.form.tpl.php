<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:20:29
  from 'C:\xampp\htdocs\tpe-web2\templates\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634daafd14dd60_47306382',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb5cba22f284452766d07c655f3faf2f9a15a2ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe-web2\\templates\\form.tpl',
      1 => 1666034425,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634daafd14dd60_47306382 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
  <base href="<?php echo BASE_URL;?>
">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>TPE</title>
  <title>Document</title>
</head>
<body>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="titulo"><h1>Ingreso</h1></div>

<form class="form" action="validate" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text"></div>
    </div>
   <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
   </div>
      <button type="submit" class="btn btn-primary">Ingresar</button>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
      <div class="alert alert-danger mt-3">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

      </div>
    <?php }?>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
