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
        $userView = new UserView(); //carrega view
        $loginData = new UserLoginRequest(); //carrega camada de validação de dados do form

        //verifica se usuário já está autenticado
        if($this->isAutenticate()){
            header("location: https://localhost/crud_smarty/user/home");
            return;
        }

        //Verifica se os dados vindos do post de login estão uteis e validos, se não retorna view com erro.
        if(!$loginData->validateData()){
           $userView->addDataToView('errors', $loginData->getError());
           $userView->showView('user/login.tpl');
           return;
        }

        $user = new User();
        if($user->autenticate($loginData->getDataRequest())){
            Session::start($user);
            header("location: https://localhost/crud_smarty/user/home");
        }else{
            echo 'falha ao logar';
        }
    }

    protected function isAutenticate(){
        return Session::user('ip_session') == $_SERVER['REMOTE_ADDR'];
    }

    public function home(){
        $userView = new UserView();
        $userView->showView('user/home.tpl');
    }
}