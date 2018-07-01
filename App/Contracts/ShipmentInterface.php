<?php 

namespace App\Contracts;

// This interface to force all class to implement only two methods that client can deal with.
interface ShipmentInterface {

    public function CreateShipment();

    public function trackShipment();

}