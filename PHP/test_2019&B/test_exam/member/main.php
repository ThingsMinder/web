<?php 
    $passed = $_COOKIE['passed'];
    if($passed != TRUE){
        echo "您尚未登录，请登录后再使用本站";
        header('location:index.html');
        exit();
    }
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Main Page</title>
    </head>
    <body>
        <p align='center'><img src="management.jpg"></p>
        <p align='center'>
            <a href="modify.php">编辑会员资料</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="delete.php">删除会员资料</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <!--
            <a href="index.html">logout</a>
            -->
            <a href="logout.php">退出登录</a>
        </p>
    </body>
</html>