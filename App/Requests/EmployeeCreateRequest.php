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
 * * @example Classe EmployeeCreateRequest.
 * */
class EmployeeCreateRequest{

    /** *
     * * Variável recebe o objeto smarty para manipular template.
     * * @access private
     * * @name $view */

    protected ?String $name = null;
    protected ?String $lastname = null;
    protected ?String $born_at = null;
    protected ?int $team_id = null;
    protected ?float $salary = null;
    private ?array $errorMsg = null;

    public function __construct(){
        $this->name = isset($_POST['name']) && !empty($_POST['name']) ? addslashes($_POST['name']) : NULL;
        $this->lastname = isset($_POST['lastname']) && !empty($_POST['lastname'])? addslashes($_POST['lastname']) : NULL;
        $this->born_at = isset($_POST['born_at']) && !empty($_POST['born_at'])? addslashes($_POST['born_at']) : NULL;
        $this->team_id = isset($_POST['team_id']) && !empty($_POST['team_id'])? addslashes($_POST['team_id']) : NULL;
        $this->salary = isset($_POST['salary']) && !empty($_POST['salary'])? addslashes($_POST['salary']) : NULL;

        return $this;
    }

     /**
     * * Função para validar os dados capturados no construct
     * * @access private
     * * @return bool se passar tudo nos testes retorna true, senão false;
     * */
    public function validateData() : bool {
        if(is_null($this->name))
            $this->errorMsg[] = 'name can\'t be empty';
        if(is_null($this->lastname))
            $this->errorMsg[] = 'lastname can\'t be empty';
        if(is_null($this->born_at))
            $this->errorMsg[] = 'born_at can\'t be empty';
        if(is_null($this->team_id))
            $this->errorMsg[] = 'team_id can\'t be empty';
        if(is_null($this->salary))
            $this->errorMsg[] = 'salary can\'t be empty';

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
        return array("name" => $this->name,
                     "lastname" => $this->lastname,
                     "born_at" => $this->born_at,
                     "team_id" => $this->team_id,
                     "salary" => $this->salary);
    }
}