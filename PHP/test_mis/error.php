<?php 
    //$file = fopen("Welcome.txt","r");
    /*
    if(!file_exists("welcome.txt")){
        die('File not found');
    }else{
        $file = fopen("welcome.txt","r");
    }

    function customError($errno,$errstr){
        echo "<b>Error:</b>[$errno]$errstr<br>";
        echo "Ending Script";
        die();
    }

    set_error_handler("customError");

    echo($test);
   

    $test = 2;
    if($test>1){
        trigger_error("Value must be 1 or below");
    }
    */

    function checkNum($number){
        if($number>1){
            throw new Exception("Value must be 1 or below");
        }elseif($number<=2){
            throw new Exception('Value must be 1');
        }
        return true;
    }

    try{
        checkNum(0);
        echo "If you see this,the number is 1 or below";
    }catch(Exception $e){
        echo "Message:".$n->getMessage();
    }

?>