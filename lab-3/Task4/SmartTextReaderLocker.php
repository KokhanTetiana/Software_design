<?php

class SmartTextReaderLocker {
    private $reader;
    private $allowedPattern;

    public function __construct($filename, $allowedPattern) {
        $this->reader = new SmartTextReader($filename);
        $this->allowedPattern = $allowedPattern;
    }

    public function readText() {
        $text = implode("", $this->reader->readText());
        if (preg_match($this->allowedPattern, $text)) {
            echo "Access denied!\n";
            echo "--------------------------------\n";
        } else {
            echo "File opened and read successfully\n";
            echo "--------------------------------\n";
            echo "Text content:\n";
            echo $text . "\n";
            echo "--------------------------------\n";
        }
    }
}