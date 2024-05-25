<?php

require_once 'autoload.php';

use factories\IPhoneFactory;
use factories\KiaomiFactory;
use factories\BalaxyFactory;

function main() {
    $iphoneFactory = new IPhoneFactory();
    $kiaomiFactory = new KiaomiFactory();
    $balaxyFactory = new BalaxyFactory();

    $iphoneLaptop = $iphoneFactory->createLaptop();
    $iphoneNetbook = $iphoneFactory->createNetbook();
    $iphoneEBook = $iphoneFactory->createEBook();
    $iphoneSmartphone = $iphoneFactory->createSmartphone();

    $kiaomiLaptop = $kiaomiFactory->createLaptop();
    $kiaomiNetbook = $kiaomiFactory->createNetbook();
    $kiaomiEBook = $kiaomiFactory->createEBook();
    $kiaomiSmartphone = $kiaomiFactory->createSmartphone();

    $balaxyLaptop = $balaxyFactory->createLaptop();
    $balaxyNetbook = $balaxyFactory->createNetbook();
    $balaxyEBook = $balaxyFactory->createEBook();
    $balaxySmartphone = $balaxyFactory->createSmartphone();

    echo "<h2>IPhone Devices:</h2>";
    echo "<ul>";
    echo "<li>" . $iphoneLaptop->displayInfo() . "</li>";
    echo "<li>" . $iphoneNetbook->displayInfo() . "</li>";
    echo "<li>" . $iphoneEBook->displayInfo() . "</li>";
    echo "<li>" . $iphoneSmartphone->displayInfo() . "</li>";
    echo "</ul>";

    echo "<h2>Kiaomi Devices:</h2>";
    echo "<ul>";
    echo "<li>" . $kiaomiLaptop->displayInfo() . "</li>";
    echo "<li>" . $kiaomiNetbook->displayInfo() . "</li>";
    echo "<li>" . $kiaomiEBook->displayInfo() . "</li>";
    echo "<li>" . $kiaomiSmartphone->displayInfo() . "</li>";
    echo "</ul>";

    echo "<h2>Balaxy Devices:</h2>";
    echo "<ul>";
    echo "<li>" . $balaxyLaptop->displayInfo() . "</li>";
    echo "<li>" . $balaxyNetbook->displayInfo() . "</li>";
    echo "<li>" . $balaxyEBook->displayInfo() . "</li>";
    echo "<li>" . $balaxySmartphone->displayInfo() . "</li>";
    echo "</ul>";
}

main();
