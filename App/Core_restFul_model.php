<?php

namespace App;

class Core{

    private string $url;
    private string $action;
    private string $controller;
    private ?array $params = null;
    private array $actionsVerbs = [
                                  "GET" => array('all', 'find'),
                                  "POST" => 'create',
                                  "PUT" => 'update',
                                  "DELETE" => 'delete'
                                  ];

    public function __construct(){
        if($this->manageUrl())
            echo "sucesso ao carregar controller";
    }
    public function manageUrl() : bool {

        $explodedUrl  =  explode("index.php", $_SERVER["PHP_SELF"]);
        $friendlyQueryString = $explodedUrl[1];

        if(!emptY($friendlyQueryString[0])){
            $friendlyQueryString = explode('/', $friendlyQueryString);
            array_shift($friendlyQueryString);
        } else {
            return true;
        }

        if(!empty($friendlyQueryString)){
            $this->controller = $friendlyQueryString[0];
            array_shift($friendlyQueryString);
        }

        if(!empty($friendlyQueryString)){
            $this->params = $friendlyQueryString;
        }

        $verb = $_SERVER['REQUEST_METHOD'];

        $this->action = $this->showAction($_SERVER['REQUEST_METHOD'], $this->params);

        return true;
    }

    private function showAction(string $verb, ?array $urlParams) : string {
        return count($urlParams) > 0 ? $this->actionsVerbs[$verb][1] : $this->actionsVerbs[$verb];
    }
}

?>