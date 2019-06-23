<?php
    require_once('dbtools.inc.php');
    header("Content-type:text/html;charset=utf-8");
   
    $account = $_POST['account'];
    $password = $_POST['password'];

    $link = create_connection();
    $sql = "SELECT * FROM users WHERE account = '$account' AND password = '$password'";
    $result = execute_sql($link,'member',$sql);
    $row = mysqli_num_rows($result);

    if($row != 0){
        $id = mysqli_fetch_object($result)->id;
        mysqli_free_result($result);
        mysqli_close($link);

        setcookie('id',$id);
        setcookie('passed','TRUE');
        header('location:main.php');

    }else{
        mysqli_free_result($result);
        mysqli_close($link);

        echo "<script type='text/javascript'>";
        echo "alert('该用户不存在，请查实后再登录');";
        echo "history.back();";
        echo "</script>";
    }

?>