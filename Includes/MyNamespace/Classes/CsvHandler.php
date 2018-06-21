<?php

namespace MyNamespace\Classes;

class CsvHandler {
    /*
    *
    */
    public function create($filename, $file_content){
        if(!$fp = fopen($filename, 'w')){
            throw new Exception ("CsvHandler->create() is unable to open/create file.");
        } else {
            //writing into the csv file.
            foreach ($file_content as $key => $val) {
                fputcsv($fp, array($key, $val));
            }
            fclose($fp);
            return $fp;
        }
    }
}