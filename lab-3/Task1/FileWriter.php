<?php

class FileWriter
{
    private $fileHandle;

    public function __construct($filePath) {
        $this->fileHandle = fopen($filePath, 'a');
    }

    public function write($message) {
        fwrite($this->fileHandle, $message);
    }

    public function writeLine($message) {
        $this->write($message . PHP_EOL);
    }

    public function __destruct() {
        fclose($this->fileHandle);
    }

}