<?php

namespace App\Core;

use PDO;

class Database extends PDO
{
    public function __construct()
    {
        $dsn = "mysql:host=192.168.0.20;dbname=footpro;charset=utf8;port=3307";
        $username = "root";
        $password = "Azertyuiop*";
        $options = [];
        parent::__construct($dsn, $username, $password, $options);
   
    }


    
}

