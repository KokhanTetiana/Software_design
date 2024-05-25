<?php

namespace factories;

use devices\Laptop;
use devices\Netbook;
use devices\EBook;
use devices\Smartphone;
use devices\Device;
class IPhoneFactory implements AbstractFactory {
    public function createLaptop(): Device {
        return new Laptop('IPhone');
    }

    public function createNetbook(): Device {
        return new Netbook('IPhone');
    }

    public function createEBook(): Device {
        return new EBook('IPhone');
    }

    public function createSmartphone(): Device {
        return new Smartphone('IPhone');
    }
}