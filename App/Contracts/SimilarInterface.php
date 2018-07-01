<?php 

namespace App\Contracts;

// This interface include the similar methods in CourierOne and CourierThree
// This is the Interface Segregation principle in SOLID
interface SimilarInterface {

    // We will implement This interface in CourierOne and CourierThree
    public function createShipmentAndGetWaybill();
    
}