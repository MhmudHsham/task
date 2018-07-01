<?php 

namespace App;

class ShipmentServiceProvider extends ServiceProvider {

    public function boot() {

    }

    // this will bind if we invoke DBInterface
    // it will changed to MySQLConnection manager
    // it helps if we change engine of the database it will help ro change only in MySQLConnection
    public function register() {
        $this->app->bind(
            App\Manager\MySQLConnection::class,
            App\Contracts\DBInterface::class
        );
    }

}