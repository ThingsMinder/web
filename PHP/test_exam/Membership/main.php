<?php
    $passed = $_COOKIE['passed'];

    if($passed != 'TRUE'){
        header('location:index.html');
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>会员管理</title>
    </head>
    <body>
        <p align='center'><img src='management.jpg'></p>
        <p align='center'>
            <a href='modify.php'>修改会员资料</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="delete.php">删除会员资料</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="logout.php">退出登录</a>
        </p>
    </body>
</html>
