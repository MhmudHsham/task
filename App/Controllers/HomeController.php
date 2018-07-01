<?php 

namespace App\Controllers;

use App\ShipmentFactory;
use App\Contracts\DBInterface;

class HomeController extends Controller {

    protected $mysqlConnection;

    // Dependency Inversion
    public function __construct(DBInterface $mysql) {
        // get object of the database connection.
        // it helps that if we change the database engine it will not need to refactor code.
        // it will only be changed in its manager
        $this->mysqlConnection = $mysql;
    }


    public function process() {
        // validation area and get data required to be sent to process the shipment
        // If there is data to be sent, it will be in methods' header and will put it in manager plus controller plus interface also.


        // To get object of the Courier we need 
        $consumer = ShipmentFactory::build($consumer_title);


        // get the first method that will be create shipment.
        $consumer->CreateShipment();

        // get the second method that will return the track shipment
        $consumer->trackShipment();
    }
    



}