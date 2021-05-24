<?php

namespace App;

class Core{

    private string $url;
    private string $method = "index";
    private string $controller = "IndexController";
    private ?array $params = null;

    public function __construct(){
        if($this->manageUrl()){
            $controller = new ($this->getController())();
            call_user_func_array(array($controller, $this->getMethod($controller)),
                                 array($this->getParams()));
        }else{
            echo "algo de errado não deu certo";
        }

    }
    public function manageUrl() : bool {

        $explodedUrl  =  explode("index.php", $_SERVER["PHP_SELF"]);
        $friendlyUrl = $explodedUrl[1];


        if(!emptY($friendlyUrl[0])){
            $friendlyUrl = explode('/', $friendlyUrl);
            array_shift($friendlyUrl);
        } else {
            return true;
        }

        //pega o nome do controller
        if(!empty($friendlyUrl)){
            $this->controller = $friendlyUrl[0];
            array_shift($friendlyUrl);
        }

        //pega o método
        if(!empty($friendlyUrl)){
            $this->method = $friendlyUrl[0];
            array_shift($friendlyUrl);
        }

        if(!empty($friendlyUrl)){
            $this->params = $friendlyUrl;
        }

        return true;
    }

    public function getController() : string{
        if(class_exists(NAMESPACE_CONTROLLER . ucfirst($this->controller) . 'Controller'))
            return NAMESPACE_CONTROLLER . ucfirst($this->controller) . 'Controller';

        return NAMESPACE_CONTROLLER . 'IndexController';
    }

    public function getMethod(object $targetController) : string{
        if(method_exists($targetController, $this->method))
            return $this->method;

        return  'notfound';
    }

    public function getParams() : ?array{
        return $this->params;
    }
}

?>