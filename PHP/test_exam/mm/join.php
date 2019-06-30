<?php
    require_once('dbtools.inc.php');

    $job_number = $_POST['job_number'];
    $password = $_POST['password'];
    //$re_password = $_POST['re_password'];
    $telephone = $_POST['telephone'];
    $name = $_POST['name'];
    $comment = $_POST['comment'];

    $link = create_connection();
    $sql = "SELECT * FROM users WHERE job_number = '$job_number'";
    $result = execute_sql($link,'mm',$sql);

    if(mysqli_num_rows($result) != 0){
        mysqli_free_result($result);
        //mysqli_close($link);

        echo "<script type='text/javascript'>";
        echo "alert('工号已存在，请确认输入正确，若无法通过注册，请与HR联系');";
        echo "history.back()";
        echo "</script>";

    }else{
        mysqli_free_result($result);
        $sql =  "INSERT INTO users(job_number,password,name,telephone,comment)
                            VALUES('$job_number','$password','$name','$telephone','$comment')";
        $result = execute_sql($link,'mm',$sql);
        mysqli_close($link);
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>注册成功</title>
    </head>
    <body>
        <p align='center'><img src="3.jpg" height="180" width="320"></p>
        <p align='center'>
            Hi, <?php echo $name.'!';?> <br>
            恭喜您！注册成功！<br>
            您的工号是：<?php echo $job_number;?><br>
            您的密码是：<?php echo $password;?><br>
            请回<a href="index.html"><i>首页</i></a>登录
        </p>
    </body>
</html>