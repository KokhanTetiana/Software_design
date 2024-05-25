<?php

namespace devices;

require_once 'Device.php';
class Laptop implements Device {
    private $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function displayInfo() {
        echo $this->brand . " Laptop\n";
    }
}