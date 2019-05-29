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


    /*
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
    */
    function create_connection(){
        $link = mysqli_connect('localhost','root','11111111')
        or die('无法建立数据链接： '.mysqli_connect_error());
        mysqli_query($link,"SET NAMES utf8");
        return $link;
        //echo "打开成功";
    }


    function execute_sql($link,$databases,$sql){
        mysqli_select_db($link,$databases)
            or die("打开数据库失败： ".mysqli_error($link));
        $result = mysqli_query($link,$sql);
        return $result;
    }

?>