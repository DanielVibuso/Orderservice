<?php
/* Smarty version 3.1.39, created on 2021-05-30 05:21:43
  from 'C:\xampp\htdocs\crud_smarty\templates\user\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b304c7c2f8e3_96256891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6932f9a074a289d7df57d3187bee261f39878d1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crud_smarty\\templates\\user\\header.tpl',
      1 => 1622344890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b304c7c2f8e3_96256891 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
	<head>
		<title>
			Gerenciador De Demandas - Início - Bem vindo $NOME_DO_USUARIO
		</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
		<?php echo '<script'; ?>
 src="https://use.fontawesome.com/52ed14a1b5.js"><?php echo '</script'; ?>
>
	</head>
	<body>
	<div class="container">
		<div id="menu" class="col-md-12">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">Inicio</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Funcionarios<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Tarefas</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Administrativo</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Contatos úteis</a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div><?php }
}
