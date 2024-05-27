<?php
require_once 'SmartTextChecker.php';
require_once  'SmartTextReader.php';
require_once  'SmartTextReaderLocker.php';


echo "<pre>";

$reader = new SmartTextReader('example.txt');
echo "Перший тест - звичайне читання файлу:\n";
$text = $reader->readText();
print_r($text);
echo "\n";


$checker = new SmartTextChecker('example.txt');
echo "Другий тест - логування читання файлу:\n";
$text = $checker->readText();
echo "\n";

$locker = new SmartTextReaderLocker('restricted_example.txt', '/restricted/');
echo "Третій тест - обмеження доступу до файлу за певним шаблоном:\n";
$text = $locker->readText();

echo "</pre>";