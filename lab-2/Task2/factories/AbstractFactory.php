<?php

namespace factories;

use Devices\Device;

interface AbstractFactory {
    public function createLaptop(): Device;
    public function createNetbook(): Device;
    public function createEBook(): Device;
    public function createSmartphone(): Device;
}