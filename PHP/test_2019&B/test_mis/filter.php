<?php

    /*
    $int = 123.5;
    if(!filter_var($int,FILTER_VALIDATE_INT)){
        echo "Integer is not valid!";
    }else{
        echo "Integer is valid!";
    }
    */

    /*
    $var = 250;

    $int_options = array("options"=>array("min_range"=>0,"max_range"=>256));

    if(!filter_var($var,FILTER_VALIDATE_INT,$int_options)){
        echo "Integer is not valid";
    }else{
        echo "Integer is valid";
    }
    */

    /*
    if(!filter_has_var(INPUT_GET,'email')){
        echo "Input type does not exist";
    }else{
        if(!filter_input(INPUT_GET,'email',FILTER_VALIDATE_EMAIL)){
            echo "E-Mail is not valid";
        }else{
            echo "E-Mail is valid";
        }
    }
    */

    /*
    if(!filter_has_var(INPUT_POST,'url')){
        echo "Input does not exist";
    }else{
        $url = filter_input(INPUT_POST,'url',FILTER_SANITIZE_URL);
    }
    */

    function convertSpace($string){
        return str_replace('_',' ',$string);
    }

    $string = 'Peter_is_a_guy!';

    echo filter_var($string,FILTER_CALLBACK,array('options'=>'convertSpace'));


?>