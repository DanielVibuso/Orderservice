<?php

namespace App\Controllers;

use App\Core\Connection;
use App\Models\User;
use App\Views\IndexView;

class IndexController{
    public function notfound(){
        echo "não encontrado 404";
    }

    public function index(){

       $user = new User();
       $user->nome = "Daniel Vilela";
       $user->save();


       /* $smarty = new \Smarty_GuestBook();
        $smarty->left_delimiter = '<!--{';
        $smarty->right_delimiter = '}-->';
        $contatos = array("nome"=>"Daniel Vibuso",
                  "telefone"=>"999999999",
                  "email"=>"daniel_2bueno@hotmail.com",
                  "github"=>"danielvibuso",
                  "salario"=>80000);
         $smarty->assign('contatos', $contatos);

         $smarty->display('index.tpl');
         */
    }

    public function installPage(){
        $installPage = new IndexView();
        $installPage->showView('index/install.tpl');
    }
}