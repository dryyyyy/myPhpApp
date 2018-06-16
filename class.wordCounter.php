<?php

class WordCounter{
    private $words;
    
    public function count($file_contents){
        if(!is_string($file_contents)){
            throw new Exception ('WordCounter->count(): $file_contents must be a sting');
        } else {
            //puts an array of words as $keys and number they are met in the text as $values
            $this->words = (array_count_values(str_word_count(strtolower($file_contents), 1)));
            return $this->words;
        }
        
    }
    
    public function sort($file_contents){
        if(!is_array($file_contents)){
            throw new Exception ('WordCounter->sort(): $file_contents must be an array');
        } else {
            arsort($file_contents);
            return $file_contents;
        }
        
    }
}