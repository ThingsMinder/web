<?php
    $passed = $_COOKIE['passed'];
    $id = $_COOKIE['id'];

    if($passed == 'TRUE'){
        //setcookie('id','');
        //setcookie('passed','');
        require_once('dbtools.inc.php');
        $link = create_connection();
        $sql = "DELETE FROM users WHERE id = $id";
        execute_sql($link,'mm',$sql);
        mysqli_close($link);
    }else{
        echo "您尚未登录本站！";
    }
?>