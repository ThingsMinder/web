<?php
    function create_connection(){
        $link = mysqli_connect("localhost","root","11111111") or die('无法建立数据连接：'.mysqli_connect_error());
        mysqli_query($link,"SET NAMES utf8");
        return $link;
    }

    function execute_sql($link,$database,$sql){
        mysqli_select_db($link,$database) or die("无法连接数据库: ".mysqli_error());
        $result = mysqli_query($link,$sql);
        return $result;
    }
    
?>