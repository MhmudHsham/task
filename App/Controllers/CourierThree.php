<?php 

namespace App\Controllers;

use App\Contracts\ShipmentInterface;
use App\Managers\CourierThreeManager;

class CourierThree extends Controller implements ShipmentInterface {

    protected $manager;

    public function __construct(CourierThreeManager $courierThreeManager) {
        $this->manager = $courierThreeManager;
    }

    public function CreateShipment() {
        $this->manager->createShipmentAndGetWaybill();      
    }

    public function trackShipment() {
        $this->manager->registerNumberToGetTrackingDetails();
        $this->manager->getTrackingDetails();
    }

}