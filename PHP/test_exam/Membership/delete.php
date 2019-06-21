<?php
    $passed = $_COOKIE['passed'];
    //echo $passed;
    
    if($passed != 'TRUE'){
        header('location:index.html');
        exit();
    }
    else
    {
        require_once('dbtools.inc.php');
        $id = $_COOKIE['id'];

        $link = create_connection();
        $sql = "DELETE FROM users WHERE id=$id";
        $result = execute_sql($link,'member',$sql);
        mysqli_close($link);
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>删除会员资料成功</title>
    </head>
    <body bgcolor='#FFFFFF'>
        <p align='center'><img src="erase.jpg"></p>
        <p align='center'>您的资料已从本站删除，若要再次使用本站服务，请重新申请，谢谢！</p>
        <p align='center'><a href="index.html">回首页</a></p>
    </body>
</html>