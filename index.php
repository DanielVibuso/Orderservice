<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "vendor/autoload.php";
require "App/config.php";
require_once('setup.php');
use App\Core;

$core = new Core();

//lixaiada
//$core->run();
/*Ler guia de instalação na documentação do smarty para entender melhor
Não é necessário gravar, está tudo explicado lá*//*
require_once('setup.php');
$smarty = new Smarty_GuestBook(); //objeto smarty, que servirá para manipular a view
$smarty->left_delimiter = '<!--{'; // para evitar problemas com o javascript embutido nas templates, trocasse o limitador do smarty
$smarty->right_delimiter = '}-->';
//Passando informações para a view
$contatos = array("nome"=>"Daniel Vilela",
                  "telefone"=>"99999999",
                  "email"=>"daniel_2bueno@hotmail.com",
                  "github"=>"danielvibuso",
                  "salario"=>50000);
$smarty->assign('contatos', $contatos);


//pegando previsão do tempo
$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'api.openweathermap.org/data/2.5/weather?id=3449072&appid=chaveapi'); //id cidade são gonçalo , appid chave da minha conta no open weathermap
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$previsao = curl_exec($cURLConnection);
curl_close($cURLConnection);

$jsonArrayResponse = json_decode($previsao);
$smarty->assign('previsao', $jsonArrayResponse);
//fim pega previsão do tempo


//chamando a view
$smarty->display('index.tpl');*/