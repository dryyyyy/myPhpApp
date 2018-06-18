<?php
include_once('class.app.php');
include_once('class.logger.php');
$logger = new Logger();
$app = new App();
try{
    $app->doThatThing($argv[1]);
} catch(Exception $e) {
    $logger->log('Error' ,$e->getMessage());
}
