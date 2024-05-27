<?php
require_once 'LightHTML.php';


$bookText = file_get_contents("my_book.txt");
$lines = explode("\n", $bookText);

$htmlElements = [];
foreach ($lines as $index => $line) {
    if ($index === 0) {
        $element = new LightElementNode('h1', 'block', 'double', [], [new LightTextNode($line)]);
    } elseif (strlen($line) < 20) {
        $element = new LightElementNode('h2', 'block', 'double', [], [new LightTextNode($line)]);
    } elseif (preg_match('/^\s/', $line)) {
        $element = new LightElementNode('blockquote', 'block', 'double', [], [new LightTextNode($line)]);
    } else {
        $element = new LightElementNode('p', 'block', 'double', [], [new LightTextNode($line)]);
    }
    $htmlElements[] = $element;
}


$totalMemory = memory_get_usage();


foreach ($htmlElements as $element) {
    echo $element->getOuterHTML() . "\n";
}

echo "Обсяг пам'яті: " . (memory_get_usage() - $totalMemory) . " bytes\n";