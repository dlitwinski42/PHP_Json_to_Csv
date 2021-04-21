<?php


class Converter
{
    public $input;
    public $output;

    public function __construct(string $input, string $output){
    $this->output = $output;
    $this->input = $input;
    }

    public function convert(){
        $jsonFile = file_get_contents($this->input);
        $array = json_decode($jsonFile, true);
        $fp = fopen($this->output, 'w');
        var_dump($array);
        foreach($array as $element){
            if(!fputcsv($fp,$element,",","")){
                print("Something went wrong!");
            }
        }
    }

}