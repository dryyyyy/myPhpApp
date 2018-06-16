<?php
include_once('class.fileReader.php');
include_once('class.wordCounter.php');
include_once('class.csvHandler.php');

class App {
    
    private $file;
    private $counted;
    
    public function doThatThing($filename){
        $reader = new FileReader();
        $wordCounter = new WordCounter();
        $csvHandler = new CsvHandler();
        
        try{
            $this->file = $reader->read($filename);
            $this->counted = $wordCounter->count($this->file);
            $this->counted = $wordCounter->sort($this->counted);
            $csvHandler->create('output.csv', $this->counted);
        } catch (Exception $e) {
            throw new Exception ($e);
        }
    }
}