<?php
require_once 'HeroBuilder.php';
require_once 'EnemyBuilder.php';


$type = $_POST['type'];
$actions = $_POST['actions'];
$height = $_POST['height'];
$build = $_POST['build'];
$hairColor = $_POST['hair_color'];
$eyeColor = $_POST['eye_color'];
$clothing = $_POST['clothing'];
$inventory = $_POST['inventory'];

if ($type === 'hero') {
    $builder = new HeroBuilder();
} elseif ($type === 'enemy') {
    $builder = new EnemyBuilder();
}

$character = $builder->setActions($actions)
    ->setHeight($height)
    ->setBuild($build)
    ->setHairColor($hairColor)
    ->setEyeColor($eyeColor)
    ->setClothing($clothing)
    ->setInventory($inventory)
    ->buildCharacter();

echo "<h2>Ваш персонаж</h2>";
$character->describe();