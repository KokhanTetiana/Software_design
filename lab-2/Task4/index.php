<?php
require_once 'Virus.php';

$virus1 = new Virus("Virus1", "Coronavirus");
$virus2 = new Virus("Virus2", "Influenza");
$virus3 = new Virus("Virus3", "Ebola");


$virus1->addChild(new Virus("Child1", "Coronavirus"));
$virus1->addChild(new Virus("Child2", "Coronavirus"));


$virus2->addChild(new Virus("Child3", "Influenza"));
$virus2->addChild(new Virus("Child4", "Influenza"));


$virus3->addChild(new Virus("Child5", "Ebola"));
$virus3->addChild(new Virus("Child6", "Ebola"));


$clone1 = $virus1->clone();
$clone2 = $virus2->clone();
$clone3 = $virus3->clone();


echo "<strong>Клон 1:</strong> " . $clone1->getName() . " (" . $clone1->getSpecies() . ")<br>";
echo "<strong>Діти клону 1:</strong><br>";
foreach ($clone1->getChildren() as $child) {
    echo "- " . $child->getName() . " (" . $child->getSpecies() . ")<br>";
}
echo "<br>";


echo "<strong>Клон 2:</strong> " . $clone2->getName() . " (" . $clone2->getSpecies() . ")<br>";
echo "<strong>Діти клону 2:</strong><br>";
foreach ($clone2->getChildren() as $child) {
    echo "- " . $child->getName() . " (" . $child->getSpecies() . ")<br>";
}
echo "<br>";


echo "<strong>Клон 3:</strong> " . $clone3->getName() . " (" . $clone3->getSpecies() . ")<br>";
echo "<strong>Діти клону 3:</strong><br>";
foreach ($clone3->getChildren() as $child) {
    echo "- " . $child->getName() . " (" . $child->getSpecies() . ")<br>";
}