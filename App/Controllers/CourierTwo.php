<?php 

namespace App\Controllers;

use App\Contracts\ShipmentInterface;
use App\Managers\CourierTwoManager;

class CourierTwo extends Controller implements ShipmentInterface {

    protected $manager;

    public function __construct(CourierTwoManager $courierTwoManager) {
        $this->manager = $courierTwoManager;
    }

    public function CreateShipment() {
        $this->manager->createShipmentInfo();   
        $this->manager->createShipmentInstructions();   
    }

    public function trackShipment() {
        $this->manager->getShipmentWaybill();
        $this->manager->getShipmentTrackingDetails();
    }

}