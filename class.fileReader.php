<?php

class FileReader {
    
    private $fp;
    
    public function read($filename){
        //trying to open the file
        if (!$this->fp = file_get_contents($filename)) {
            throw new Exception ("FileReader->read() is unable to open file.");
        } else {
            return $this->fp;
        }
    }
}
