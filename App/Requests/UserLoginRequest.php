<?php

namespace App\Requests;

/** *
 * * Esta classe de validação de dados vindo do Request POST
 * * @author Daniel Vilela <daniel_2bueno@hotmail.com>
 * * @version 0.1
 * * @copyright proprietary.
 * * @access public
 * * @package App
 * * @subpackage Requests
 * * @example Classe userLoginRequest.
 * */
class UserLoginRequest{

    /** *
     * * Variável recebe o objeto smarty para manipular template.
     * * @access private
     * * @name $view */

    protected ?String $login = null;
    protected ?String $password = null;
    private ?array $errorMsg = null;

    public function __construct(){
        $this->login = isset($_POST['login']) && !empty($_POST['login']) ? addslashes($_POST['login']) : NULL;
        $this->password = isset($_POST['login']) && !empty($_POST['password'])? addslashes($_POST['password']) : NULL;
    }

     /**
     * * Função para validar os dados capturados no construct
     * * @access private
     * * @return bool se passar tudo nos testes retorna true, senão false;
     * */
    public function validateData() : bool {
        if(is_null($this->login))
            $this->errorMsg[] = 'Login can\'t be empty';
        if(is_null($this->password))
            $this->errorMsg[] = 'Password can\'t be empty';

        return (is_array($this->errorMsg) && count($this->errorMsg) > 0) ? false : true;
    }

    /*método que retorna os erros possíveis encontrados nos dados do post */
    public function getError() : array{
        return $this->errorMsg;
    }

    //método que retorna os dados enviados no request*/
    /*pode fazer outro imitando o getDataRequestOnly('nome', 'senha') e criar o array de retorno
    de acordo com os dados passado via parametro imitando o padrão request Only do laravel*/
    public function getDataRequest() : array{
        return array("login" => $this->login,
                     "password" => $this->password);
    }
}