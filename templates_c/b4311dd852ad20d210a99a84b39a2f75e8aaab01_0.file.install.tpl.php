<?php
/* Smarty version 3.1.39, created on 2021-05-23 18:40:32
  from 'C:\xampp\htdocs\crud_smarty\templates\index\install.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60aa858061d152_93420917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4311dd852ad20d210a99a84b39a2f75e8aaab01' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crud_smarty\\templates\\index\\install.tpl',
      1 => 1621788027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.tpl' => 1,
  ),
),false)) {
function content_60aa858061d152_93420917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "index/install.conf", null, 0);
?>

<title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Login fornecido pelo Desenvolvedor</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Senha fornecida pelo Desenvolvedor</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Instalar sistema</button>
      </form>
    </div>
  </div>
</div>
<?php }
}
