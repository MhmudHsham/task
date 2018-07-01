<?php 

namespace App;

// Factory Design Pattern
// It helps to get object of the class that we will pass
class ShipmentFactory {

    // get the object 
    public static function build($consumer_title) {
        // put the 'Courier' title as we will recieve only (One, Two or Three) the rest of Courier title.
        $consumer = "Courier" . ucwords($consumer_title);
        // check if the class of Courier exists or not.
        if(class_exists($consumer)) {
            // return new instance of this class that helps to be used.
            return new $consumer();
        }
        else {
            throw new Exception("Invalid Consumer.");
        }
    }

}