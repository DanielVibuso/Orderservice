<?php

namespace App\Controllers;

use App\Core\Connection;
use App\Models\User;
use App\Views\IndexView;

class IndexController{
    public function notfound(){
        echo "não encontrado 404";
    }