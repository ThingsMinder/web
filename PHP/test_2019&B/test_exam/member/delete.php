<?php
    $passed = $_COOKIE['passed'];
    $id = $_COOKIE['id'];

    if($passed = 'TURE'){
        require_once('dbtools.inc.php');
        $link = create_connection();
        $sql = "DELETE FROM users WHERE id = $id";
        $result = execute_sql($link,'member',$sql);
        mysqli_free_result($result);
        mysqli_close($link);
    }else{
        echo "您尚未登录，请至首页登录";
        header('location:index.html');
        exit();
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Delete Member</title>
    </head>
    <body bgcolor="#FFFFFF">
        <p align='center'><img src="erase.jpg"></p>
        <p align='center'>
            Your info had been deleted,Please sign in again.
        </p>
        <p align='center'>
            <a href="index.html">回首页</a>
        </p>
    <body>
</html>