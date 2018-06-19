<?php
include_once('interface.logger.php');
include_once('class.fileLogger.php');
include_once('class.fileReader.php');
include_once('class.wordCounter.php');
include_once('class.csvHandler.php');
include_once('class.app.php');
include_once('class.logger.php');


$logger = new FileLogger();
$reader = new FileReader();
$wordCounter = new WordCounter();
$csvHandler = new CsvHandler();


$app = new App($argv[1],$reader, $wordCounter, $csvHandler, $logger);

