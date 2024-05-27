<?php

class FileLogger
{
    private $logger;
    private $fileWriter;

    public function __construct(Logger $logger, FileWriter $fileWriter) {
        $this->logger = $logger;
        $this->fileWriter = $fileWriter;
    }

    public function log($message) {
        $this->logger->log($message);
        $this->fileWriter->writeLine("[LOG] " . $message);
    }

    public function error($message) {
        $this->logger->error($message);
        $this->fileWriter->writeLine("[ERROR] " . $message);
    }

    public function warn($message) {
        $this->logger->warn($message);
        $this->fileWriter->writeLine("[WARN] " . $message);
    }

}