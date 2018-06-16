<?php

class Logger extends Exception{
    public function log($e){
        echo 'Good news, everyone! ' . $e . "\n";
    }
}