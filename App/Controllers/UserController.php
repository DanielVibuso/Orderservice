<?php
namespace App\Controllers;

use App\Core\Connection;
use App\Models\User;
use App\Views\UserView;
use App\Requests\UserLoginRequest;
use App\Core\Session;

class UserController{

    public function login(){
        $loginPage = new UserView();
        $loginPage->showView('user/login.tpl');
    }

    public function autenticate(): void{
        $loginPage = new UserView(); //carrega view
        $loginData = new UserLoginRequest(); //carrega camada de validação de dados do form

        //Verifica se os dados vindos do post de login estão uteis e validos, se não retorna view com erro.
        if(!$loginData->validateData()){
           $loginPage->addDataToView('errors', $loginData->getError());
           $loginPage->showView('user/login.tpl');
           return;
        }

        //carrega camada model, persistencia de dados inclusive e salva os dados do usuário na sessão, para uso durante
        //execução do código não necessitar realizar pesquisas sobre isso.
        $user = new User();
        if($user->autenticate($loginData->getDataRequest())){
            Session::start($user);
            //TODO: Chamar tela home de usuários logados.
            //forma de pegar os dados da sessão.$myvar = Session::user('uid', 'login');
        }else{
            echo 'falha ao logar';
        }


    }
}