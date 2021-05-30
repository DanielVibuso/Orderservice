<?php
namespace App\core;
class Session{

    //inicia a sessão e salva os dados do usuário logado nela.
    public static function start($userData){
        if(session_status() === PHP_SESSION_NONE)
           session_start();

        $_SESSION['user']['ip_session'] = $_SERVER['REMOTE_ADDR'];
        foreach($userData->toArray() as $key => $value){
            $_SESSION['user'][$key] = $value;
        }

    }

    //pega cada item da sessão especificada usando nome do método como primeiro array e argumento como segundo array.
    //isso evita precisar fazer vários métodos, com uso de métodos virtuais.
    //Ex:
    // Session::user('ip_session'); retorn o ip do usuário da sessão
    // Session::user('id'); retorna o id do usuário logado
    // Session::user('nome'); retorna o nome do usuário logado
    //exemplo Session::user('ip_session');  retorna o ip cadastrado no $_SESSION['user']['ip_session'];
    public static function __callstatic($staticMethod, $argumentos){
        session_start();
        $data = array();
        foreach($argumentos as $chave)
            $data[] = isset($_SESSION[$staticMethod][$chave]) ? $_SESSION[$staticMethod][$chave] : null ;

        return count($data) > 1 ? $data : $data[0];
    }
}

?>