 <!--{* A fim de facilitar o desenvolvimento do front, toda a página pode ser escrita como se fosse de dados estáticos, e depois de pronta pode ser arrumada para o smarty sem problemas. *}-->

<!--{* inclua o arquivo de cabeçalho aqui *}-->
<!--{config_load file="index/index.conf"}-->          <!--{* os arquivos de configuração devem ficar dentro da pasta config, como foi configurado anteiormente no setup *}-->
<!--{include file="header.tpl"}-->              <!--{* incluindo cabeçalho que será comum em todas as tpl *}-->
<title><!--{#pageTitle#}--></title>             <!--{* usando variaveis vindas do arquivo config *}-->
<body bgcolor="<!--{#backgroundColor#}-->">     <!--{* usando variaveis vindas do arquivo config *}-->


Mostrando os meios de contato de <!--{$contatos.nome}--><br>
<!--{foreach from=$contatos key=chave item=value}-->           <!--{*Exemplo uso de foreach com dados vindos do controller*}-->
    <!--{$chave}--> : <!--{$value}--> <br>
<!--{/foreach}-->
    Salário: <!--{$contatos.salario|string_format:"%5.2f"|cat:" R$"}--> <br>   <!--{*Exemplo uso de mascara/modificadores de variáveis*}-->

<!--{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}--> <!--{*Acessando data atual e formatando com date_format*}-->

<hr>

Previsão do tempo para <!--{$previsao->name}-->
Temperatura atual: <!--{$previsao->main->temp|string_format:"%2.1f"}--><br>
Temperatura mínima: <!--{$previsao->main->temp_min|string_format:"%.1f"}--><br>
Temperatura máxima: <!--{$previsao->main->temp_max|string_format:"%2.1f"}--><br>
Sensação términca: <!--{$previsao->main->feels_like|string_format:"%2.1f"}--><br>

<button type="button" class="btn btn-primary">Primary</button>
<!--{* acessando informações uteis com o smart object
<!--{$smarty.server.SERVER_NAME}--> nome do servidor
<!--{$smarty.get.page}--> pega o parametro page se tiver sendo enviaod pelo get
     $smarty.post.page pega o dado page se estiver sendo enviado por um método post
<!--{$smarty.env.PATH}--> path do ambiente atual
<!--{$smarty.session.id}--> session id se definida sessao
<!--{$smarty.server.SERVER_NAME}--> server name
{$smarty.const._MY_CONST_VAL} Acessando constantes do php diretamente pelo objeto smarty
*}-->

 <!--{* embutindo javascript - Importante lembrar de alterar os delimitadores do objeto smarty, para que não entenda os { } do javascrit como delimitadores *}-->

<script>
    document.querySelector(".btn").addEventListener("click", function(){
        alert("Clicou em mim pq?")
    })
</script>

</body>