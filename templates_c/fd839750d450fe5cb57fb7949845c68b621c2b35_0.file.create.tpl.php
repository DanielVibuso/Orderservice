<?php
/* Smarty version 3.1.39, created on 2021-05-30 22:45:01
  from 'C:\xampp\htdocs\crud_smarty\templates\employee\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b3f94d8813a9_57306182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd839750d450fe5cb57fb7949845c68b621c2b35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crud_smarty\\templates\\employee\\create.tpl',
      1 => 1622407500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:employee/header.tpl' => 1,
  ),
),false)) {
function content_60b3f94d8813a9_57306182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:employee/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
      <form action="https://localhost/crud_smarty/employee/create" method="POST">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Sobrenome</label>
          <input name='lastname' type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Nascimento</label>
          <input name='born_at' type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Equipe/Turno</label>
          <input name='team_id' type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Remuneração</label>
          <input name='salary' type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
      
        <button type="submit" class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
</div>
<?php }
}
