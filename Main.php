<?php
include("Converter.php");

$input = ".";
$output = ".";
if($argc < 4){
    print("Not enough arguments");
}
else {
    for ($i = 0; $i < ($argc - 1); $i++) {
        if ($argv[$i] == "-i") {
            $input = $argv[$i + 1];
        }
        if ($argv[$i] == "-o") {
            $output = $argv[$i + 1];
        }
    }
    if ($input != "." && $output != ".") {
        $converter = new Converter($input, $output);
        $converter->convert();
    }
    else{
        print("Input or output files not specified");
    }
}