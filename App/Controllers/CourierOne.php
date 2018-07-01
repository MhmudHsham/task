<?php 

namespace App\Controllers;

use App\Contracts\ShipmentInterface;
use App\Managers\CourierOneManager;

class CourierOne extends Controller implements ShipmentInterface {

    protected $manager;

    public function __construct(CourierOneManager $courierOneManager) {
        $this->manager = $courierOneManager;
    }

    public function CreateShipment() {
        $this->manager->createShipmentAndGetWayBill();
    }

    public function trackShipment() {
        $this->manager->createShipmentAndTrackingDetails();
    }

}