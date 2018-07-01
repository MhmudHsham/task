<?php 

namespace App\Contracts;

// This interface for CourierThree 
// Here the methods that is only be found in CourierThree
interface InterfaceZ {    

    // This helps to unite the methods.
    public function registerNumberToGetTrackingDetails();

    public function getTrackingDetails();
    
}