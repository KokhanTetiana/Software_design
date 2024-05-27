<?php
class SmartTextReader {
    private $filename;

    public function __construct($filename) {
        $this->filename = $filename;
    }

    public function readText() {
        return file($this->filename);
    }
}