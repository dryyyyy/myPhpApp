<?php

namespace MyNamespace\Classes;

class App {
    
    private $file;
    private $counted;
    /*
    *
    */
    function __construct($filename, $reader, $wordCounter, $csvHandler, $logger){
        try{
            $this->file = $reader->read($filename);
            $this->counted = $wordCounter->count($this->file);
            $this->counted = $wordCounter->sort($this->counted);
            $csvHandler->create('output.csv', $this->counted);
        } catch (Exception $e) {
            $logger->log('Error' ,$e->getMessage());
        }
    }
}