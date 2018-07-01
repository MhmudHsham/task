<?php 

namespace App\Contracts;

// This interface helps to unite the method title of Database connection.
interface DBInterface {

    // Any class in the project will only invoke this method to get connection
    public function setConnection();
    
}