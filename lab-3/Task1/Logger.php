<?php

class Logger
{
    public function log($message) {
        echo '<p style="color: green;">' . htmlspecialchars($message) . '</p>';
    }

    public function error($message) {
        echo '<p style="color: red;">' . htmlspecialchars($message) . '</p>';
    }

    public function warn($message) {
        echo '<p style="color: orange;">' . htmlspecialchars($message) . '</p>';
    }

}