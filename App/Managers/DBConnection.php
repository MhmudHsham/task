<?php 

namespace App\Managers;

use App\Contracts\DBInterface;

// Manager of DBConnection 
class DBConnection implements DBInterface {

    // Here we can set the connection 
    // If it will be MySQL, SQLServer or another Engine
    public function setConnection() {

        echo 'Connection established .... ';

    }

}