<?php

require_once 'heroes.php';
require_once 'inventory.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $heroType = $_POST["hero"];
    $inventory = $_POST["inventory"] ?? [];


    switch ($heroType) {
        case 'Warrior':
            $hero = new Warrior();
            break;
        case 'Mage':
            $hero = new Mage();
            break;
        case 'Paladin':
            $hero = new Paladin();
            break;
        default:
            echo "Invalid hero type";
            exit();
    }


    $inventoryInfo = implode(", ", $inventory);


    echo "<h2>Your Hero:</h2>";
    echo "<p>Type: " . $hero->getDescription() . "</p>";
    echo "<p>Inventory: " . $inventoryInfo . "</p>";
} else {

    echo "Form data not submitted";
}
