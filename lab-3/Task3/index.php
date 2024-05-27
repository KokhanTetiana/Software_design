<?php
require_once 'shape.php';
require_once 'renderer.php';

$vectorRenderer = new VectorRenderer();
$rasterRenderer = new RasterRenderer();

$shapes = [
    new Circle($vectorRenderer),
    new Square($rasterRenderer),
    new Triangle($vectorRenderer)
];

foreach ($shapes as $shape) {
    $shape->draw();
    echo "<br>";
}