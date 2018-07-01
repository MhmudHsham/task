<?php 

namespace App\Contracts;

// This interface for CourierTwo
// Here the methods that is only be found in CourierTwo
interface InterfaceY {

    // This helps to unite the methods.
    public function createShipmentInfo();

    public function createShipmentInstructions();

    public function getShipmentWaybill();

    public function getShipmentTrackingDetails();

}