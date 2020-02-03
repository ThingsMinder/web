<?php

    //以下函数名称 切莫写错，否则后面很难找出bug
    function create_connection(){
        $link = mysqli_connect('localhost','root','11111111') 
            or die("无法建立连接: ".mysqli_connect_errno());
        mysqli_query($link,'SET NAMES utf8');
        return $link;
    }


    function execute_sql($link,$database,$sql){
        mysqli_select_db($link,$database) 
            or die("打开数据库失败：".mysqli_error());

        $result = mysqli_query($link,$sql);
        return $result;
    }
?>