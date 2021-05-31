<?php
/* Smarty version 3.1.39, created on 2021-05-31 02:43:35
  from 'C:\xampp\htdocs\crud_smarty\templates\employee\showAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b43137aa8ad2_62595106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c6834a9304bb0c7ba884ff0624741025d198af9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crud_smarty\\templates\\employee\\showAll.tpl',
      1 => 1622421813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:employee/header.tpl' => 1,
  ),
),false)) {
function content_60b43137aa8ad2_62595106 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:employee/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
  <div class="row justify-content-md-center">
    <div class="col col-lg-6">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Sobrenome</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Time</th>
            <th scope="col">Salário</th>
            <th scope="col">Editar<th>
          </tr>
        </thead>
        <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['employees']->value, 'value', false, 'chave');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chave']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
           <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['lastname'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['born_at'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['team_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['salary'];?>
</td>
            <td><a href="http://localhost/crud_smarty/employee/showEmployeePage/<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">Visualizar</a></td>
          </tr>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php }
}
