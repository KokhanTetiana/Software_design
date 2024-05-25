<?php

namespace devices;

require_once 'Device.php';
class Netbook implements Device {
    private $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function displayInfo() {
        echo $this->brand . " Netbook\n";
    }
}