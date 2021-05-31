<?php

namespace App\Models;

use App\Models\Model;
use App\Core\Connection;

class Employee extends Model{

    public function __construct(){
        $this->table = "employees";
        parent::__construct();
    }

    //TODO: Abstrair o método create abaixo no model pai, com captura dinamica dos datas
    public function create(array $data): bool{
        $this->name = $data['name'];
        $this->lastname = $data['lastname'];
        $this->born_at =  $data['born_at'];
        $this->team_id = $data['team_id'];
        $this->salary = $data['salary'];
        if($this->save())
            return true;
        else
            return false;
    }

}
