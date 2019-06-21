<?php 
    require_once('dbtools.inc.php');
    header("Content-type:text/html;charset=utf-8");

    $account = $_POST['account'];
    $password = $_POST['password'];

    $link = create_connection();
    $sql = "SELECT * FROM users WHERE account = '$account' AND password = '$password'";

    $result = execute_sql($link,'member',$sql);

    if(mysqli_num_rows($result) == 0){
        mysqli_free_result($result);

        mysqli_close($result);

        echo "<script type='text/javascript'>";
        echo "alert('账号密码错误，请查明后再登录');";
        echo "history.back();";
        echo "</script>";
    }else{
        $id = mysqli_fetch_object($result) -> id;

        mysqli_free_result($result);
        mysqli_close($link);

        setcookie('id',$id);
        setcookie('passed','TRUE');
        header('location:main.php');
    }

?>