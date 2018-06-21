<?php
namespace MyNamespace\Classes;

require __DIR__ . '/vendor/autoload.php';

use MyNamespace\Classes;
use MyNamespace\Interfaces;

$logger = new FileLogger();
$reader = new FileReader();
$wordCounter = new WordCounter();
$csvHandler = new CsvHandler();


$app = new App($argv[1],$reader, $wordCounter, $csvHandler, $logger);

