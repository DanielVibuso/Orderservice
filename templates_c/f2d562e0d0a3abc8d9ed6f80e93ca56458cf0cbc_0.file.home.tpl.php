<?php
/* Smarty version 3.1.39, created on 2021-05-30 05:03:39
  from 'C:\xampp\htdocs\crud_smarty\templates\user\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b3008be277c9_21849525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2d562e0d0a3abc8d9ed6f80e93ca56458cf0cbc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crud_smarty\\templates\\user\\home.tpl',
      1 => 1622343739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/header.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_60b3008be277c9_21849525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:user/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="row">
	<div class="col-md-3">
		<h4>funcionarios ativos</h4>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Pessoa</th>
		      <th scope="col">Ações</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Mark</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		    <tr>
		      <td>Jacob</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		    <tr>
		      <td>Larry</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<div class="col-md-3 " >
		<h4>Boletos Resumo</h4>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Conta</th>
		      <th scope="col">Ações</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Luz</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		    <tr>
		      <td>ALuguel</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		    <tr>
		      <td>Convenio Saude</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<div class="col-md-3" >
		<h4>Quadro de encomendas</h4>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Requerente</th>
		      <th scope="col">Ações</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Arnaldo</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		    <tr>
		      <td>Barnabe</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		    <tr>
		      <td>CCraudio</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<div class="col-md-3 ">
		<h4>Quadro de Avisos</h4>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Requerente</th>
		      <th scope="col">Ações</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <td>Arnaldo</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		    <tr>
		      <td>Barnabe</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		    <tr>
		      <td>CCraudio</td>
		      <td><i class="far fa-eye">ver</i></td>
		    </tr>
		  </tbody>
		</table>
	</div>
</div>

<div class="row justify-content-center">
	<div class="col-md-6">
		<h1>Aqui vai outro conteudo</h1>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:user/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
