<?php

$parser = xml_parser_create();

function start($parser,$element_name,$element_attrs){
    switch($element_name){
        case "NOTE":
            echo "-- Note --<br>";
        break;
        case "TO":
            echo"To:<br>".'<br>';
        break;
        case "FROM":
            echo"From:".'<br>';
        break;
        case "HEADING:":
            echo"Heading:".'<br>';
        break;
        case "BODY":
            echo"Message".'<br>';
        break;
    }
}

function stop($parser,$element_name){
    echo "<br>";
}

function char($parser,$data){
    echo $data;
}

xml_set_element_handler($paeser,"start","stop");

xml_set_character_data_handler($parser,"char");

$fp=fopen('test.xml','r');

while($data=fread($fp,4096)){
    xml_parse($parser,$data,feof($fp))or 
    die(sprintf('XML Error:%s at line %d',
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)));
}

xml_parser_free($parser);

?>