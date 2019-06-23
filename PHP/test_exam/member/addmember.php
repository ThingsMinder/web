<?php
    $account = $_POST['account'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $telephone = $_POST['telephpne'];


    require_once('dbtools.inc.php');
    $link = create_connection();
    $sql = "SELECT * FROM users WHERE account = $account";
    $result = execute_sql($link,'member',$sql);

    $row = mysqli_num_rows($result);

    if($row != 0){
        echo "该用户名已存在，请使用其它名称注册会员...";
        header('location:join.html');
        mysqli_free_result($result);
        mysqli_close($link);
    }else{
        $link = create_connection();
        $sql = "INSERT INTO users(account,password,name,sex,telephone) VALUES('$account','$password','$name','$sex','$telephone')";
        $result = execute_sql($link,'member',$sql);
        mysqli_free_result($result);
        mysqli_close($link);

        header('location:main.php');
    }


?>