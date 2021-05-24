<?php
namespace App\core;
class Session{

    //inicia a sessão e salva os dados do usuário logado nela.
    public static function start($userData){
        if(session_status() === PHP_SESSION_NONE){
           session_start();
           $_SESSION['user']['ip_session'] = $_SERVER['REMOTE_ADDR'];
           foreach($userData->toArray() as $key => $value){
             $_SESSION['user'][$key] = $value;
           }
        }
    }

    //pega cada item da sessão especificada usando nome do método como primeiro array e argumento como segundo array.
    //isso evita precisar fazer vários métodos.
    public static function __callstatic($staticMethod, $argumentos){

        $data = array();
        foreach($argumentos as $chave)
            $data[] = $_SESSION[$staticMethod][$chave];

        return $data;
    }
}

?>