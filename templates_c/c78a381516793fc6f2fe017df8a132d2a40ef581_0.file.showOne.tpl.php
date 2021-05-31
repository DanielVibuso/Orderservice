<?php
/* Smarty version 3.1.39, created on 2021-05-31 04:21:14
  from 'C:\xampp\htdocs\crud_smarty\templates\employee\showOne.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b4481acc92d5_19162496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c78a381516793fc6f2fe017df8a132d2a40ef581' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crud_smarty\\templates\\employee\\showOne.tpl',
      1 => 1622427671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:employee/header.tpl' => 1,
  ),
),false)) {
function content_60b4481acc92d5_19162496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:employee/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Nome</label>
            <input type="text" class="form-control" id="inputEmail4"  value='<?php echo $_smarty_tpl->tpl_vars['employee']->value['name'];?>
'>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Sobrenome</label>
            <input type="text" class="form-control" id="inputPassword4" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['lastname'];?>
">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Nascimento</label>
          <input type="text" class="form-control" id="inputAddress" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['born_at'];?>
">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Time</label>
          <input type="text" class="form-control" id="inputAddress2" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['team_id'];?>
">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Salário</label>
            <input type="text" class="form-control" id="inputCity" value="<?php echo $_smarty_tpl->tpl_vars['employee']->value['salary'];?>
">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
      </form>
    </div>
  </div>
</div>
<?php }
}
