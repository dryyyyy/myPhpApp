<?php

namespace MyNamespace\Classes;

class WordCounter{
    private $words;
    /*
    *
    */
    public function count($file_contents){
        if(!is_string($file_contents)){
            throw new Exception ('WordCounter->count(): expects a sting as an attribute');
        } else {
            $file_contents = preg_replace("/[^A-Za-z0-9 ]/", '', $file_contents); // removing all non-alphanumeric characters as they are not to be counted as words
            $this->words = (array_count_values(str_word_count(strtolower($file_contents), 1))); // puts an array of words as $keys and number they are met in the text as $values
            return $this->words;
        }
        
    }
    /*
    *
    */
    public function sort($file_contents){
        if(!is_array($file_contents)){
            throw new Exception ('WordCounter->sort(): $file_contents must be an array');
        } else {
            arsort($file_contents);
            return $file_contents;
        }
        
    }
}