<?php
/* Smarty version 3.1.39, created on 2021-05-23 04:53:14
  from 'C:\xampp\htdocs\crud_smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a9c39ac50209_18902970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '810c22382ee210527df45fe5dd26c60d9741cf56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crud_smarty\\templates\\index.tpl',
      1 => 1621731973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_60a9c39ac50209_18902970 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\php\\lib\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
 
<?php
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "index.conf", null, 0);
?>
          <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>              <title><?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'pageTitle');?>
</title>             <body bgcolor="<?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'backgroundColor');?>
">     

Mostrando os meios de contato de <?php echo $_smarty_tpl->tpl_vars['contatos']->value['nome'];?>
<br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contatos']->value, 'value', false, 'chave');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['chave']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>               <?php echo $_smarty_tpl->tpl_vars['chave']->value;?>
 : <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    Salário: <?php echo (sprintf("%5.2f",$_smarty_tpl->tpl_vars['contatos']->value['salario'])).(" R"."$");?>
 <br>   
<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d %H:%M:%S");?>
 
<hr>

Previsão do tempo para <?php echo $_smarty_tpl->tpl_vars['previsao']->value->name;?>

Temperatura atual: <?php echo sprintf("%2.1f",$_smarty_tpl->tpl_vars['previsao']->value->main->temp);?>
<br>
Temperatura mínima: <?php echo sprintf("%.1f",$_smarty_tpl->tpl_vars['previsao']->value->main->temp_min);?>
<br>
Temperatura máxima: <?php echo sprintf("%2.1f",$_smarty_tpl->tpl_vars['previsao']->value->main->temp_max);?>
<br>
Sensação términca: <?php echo sprintf("%2.1f",$_smarty_tpl->tpl_vars['previsao']->value->main->feels_like);?>
<br>

<button type="button" class="btn btn-primary">Primary</button>

 
<?php echo '<script'; ?>
>
    document.querySelector(".btn").addEventListener("click", function(){
        alert("Clicou em mim pq?")
    })
<?php echo '</script'; ?>
>

</body><?php }
}
