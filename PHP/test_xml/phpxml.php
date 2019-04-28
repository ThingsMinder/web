<?php

$parser = xml_parser_create();

function start($parser,$element_name,$element_attrs){
    switch($element_name){
        case "note":
            echo "-- Note --<br>";
        break;
        case "to":
            echo "To:";
        break;
        case "from":
            echo "From:";
        break;
        case "heading":
            echo "Heading:";
        break;
        case "body":
            echo "Message";
        
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
    die(sprintf("XML Error:%s at line %d",
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)));
}

xml_parser_free($parser);

?>