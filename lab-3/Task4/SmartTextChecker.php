<?php
class SmartTextChecker {
    private $reader;

    public function __construct($filename) {
        $this->reader = new SmartTextReader($filename);
    }

    public function readText() {
        $lines = $this->reader->readText();
        echo "File opened and read successfully\n";
        echo "--------------------------------\n";
        echo "Total lines: " . count($lines) . "\n";
        $totalChars = 0;
        foreach ($lines as $line) {
            $totalChars += strlen($line);
        }
        echo "Total characters: $totalChars\n";
        echo "--------------------------------\n";
        return $lines;
    }
}