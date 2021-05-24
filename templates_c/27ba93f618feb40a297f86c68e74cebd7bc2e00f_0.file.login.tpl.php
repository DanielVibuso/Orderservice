<?php
/* Smarty version 3.1.39, created on 2021-05-23 19:41:10
  from 'C:\xampp\htdocs\crud_smarty\templates\user\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa93b65fa3e3_72439141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27ba93f618feb40a297f86c68e74cebd7bc2e00f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crud_smarty\\templates\\user\\login.tpl',
      1 => 1621791666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/header.tpl' => 1,
  ),
),false)) {
function content_60aa93b65fa3e3_72439141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "user/login.conf", null, 0);
?>

<title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
      <?php if ((isset($_smarty_tpl->tpl_vars['errors']->value))) {?>
        <p> falha ao tentar fazer login, as seguintes mensagens foram retornadas:</p>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
          <span><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php }?>
      <form action="/crud_smarty/user/autenticate" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Login</label>
          <input name='login' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha</label>
          <input name='password' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Acessar</button>
      </form>
    </div>
  </div>
</div>
<?php }
}
