<?php
    /*
    $num = $_GET['num']; 
    $handle = fopen('abc.txt','w+');
    if($num){
        $contents = "I love ".$num;
        fwrite($handle,$contents);
        echo $contents;
    }
    */

    function open_folder($folder){
        if(file_exists($folder)){
            opendir($folder);
        }else{
            throw new Exception('The folder is not exist');
        }
    }


    try{
        open_folder('abc.txt');
    }catch(Exception $ex){
        echo "error info: ".$ex->getMessage().'<br>';
        echo "error code: ".$ex->getCode().'<br>';
        echo "file dir: ".$ex->getFile().'<br>';
        echo "error line: ".$ex->getLine().'<br>';
    }

?>