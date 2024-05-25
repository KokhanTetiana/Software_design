<?php

namespace factories;

use devices\Laptop;
use devices\Netbook;
use devices\EBook;
use devices\Smartphone;
use devices\Device;
class BalaxyFactory implements AbstractFactory {
    public function createLaptop(): Device {
        return new Laptop('Balaxy');
    }

    public function createNetbook(): Device {
        return new Netbook('Balaxy');
    }

    public function createEBook(): Device {
        return new EBook('Balaxy');
    }

    public function createSmartphone(): Device {
        return new Smartphone('Balaxy');
    }
}