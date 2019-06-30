<?php
    require_once('dbtools.inc.php');
    header('Content-type:text/html;charset=utf-8');
    
    $job_number = $_POST['job_number'];
    $password = $_POST['password'];

    $link = create_connection();
    
    $sql = "SELECT * FROM users WHERE job_number = '$job_number'";
    
    $result = execute_sql($link,'mm',$sql);
    $re_password = mysqli_fetch_object($result)->password;
    
    if(mysqli_num_rows($result) == 0){
        mysqli_free_result($result);
        mysqli_close($link);
        echo "<script type='text/javascript'>";
        echo "alert('账号不存在，请查实后再登录');";
        echo "history.back();";
        echo '</script>';
    }else{
        if($password != $re_password){
            mysqli_free_result($result);
            mysqli_close($link);
            echo "<script type='text/javascript'>";
            echo "alert('密码不正确，请查实后再登录');";
            echo "history.back();";
            echo "</script>";
        }else{
            $id = mysqli_fetch_object($result)->id;
            mysqli_free_result($result);
            mysqli_close($link);
    
            setcookie('id',$id);
            setcookie('passed',"TRUE");
            header('location:main.php');
        }
    }




?>