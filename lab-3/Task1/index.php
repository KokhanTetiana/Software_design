<?php
require_once 'Logger.php';
require_once 'FileWriter.php';
require_once 'FileLogger.php';

function main() {
    $logger = new Logger();
    $fileWriter = new FileWriter('log.txt');
    $fileLogger = new FileLogger($logger, $fileWriter);

    $fileLogger->log("This is a log message.");
    $fileLogger->error("This is an error message.");
    $fileLogger->warn("This is a warning message.");
}

main();
