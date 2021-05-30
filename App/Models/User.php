<?php

namespace App\Models;

use App\Models\Model;
use App\Core\Connection;

class User extends Model{
    public function autenticate(array $data){
        $login = $data['login'];
        $password = $data['password'];

        $sql = "SELECT * From users where login = :login and password = md5(:password) LIMIT 1";

        if ($connection = Connection::getInstance()) {
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(':login', $login);
            $stmt->bindValue(':password', $password);
            if($stmt->execute()){
                $data = $stmt->fetch();
                $this->uid = $data['id'];
                $this->login = $data['login'];
                $this->password =  $data['password'];
                return true;
            }
            else
                return false;
        }else{
            return false;
        }

    }
}
