<?php

namespace factories;

use devices\Laptop;
use devices\Netbook;
use devices\EBook;
use devices\Smartphone;
use devices\Device;
class KiaomiFactory implements AbstractFactory {
    public function createLaptop(): Device {
        return new Laptop('Kiaomi');
    }

    public function createNetbook(): Device {
        return new Netbook('Kiaomi');
    }

    public function createEBook(): Device {
        return new EBook('Kiaomi');
    }

    public function createSmartphone(): Device {
        return new Smartphone('Kiaomi');
    }
}