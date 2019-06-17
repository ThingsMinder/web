<?php 
    require_once('dbtools.inc.php');

    $account = $_POST['account'];
    $password = $_POST['password'];
    $name = $_POST['namae'];
    $sex = $_POST['sex'];
    $year = $_POST['year'];
    $month = $_POST['month'];
    $day = $_POST['day'];
    $telephone = $_POST['telephone'];
    $cellphone = $_POST['cellphone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $url = $_POST['url'];
    $comment = $_POST['comment'];

    $link = create_connection();

    $sql = "SELECT * FROM users WHERE account = '$account'";
    $result = execute_sql($link,'member',$sql);

    if(mysqli_num_rows($result) != 0){
        mysqli_free_result($result);

        echo "<script type='text/javascript'>";
        echo "alert('您所指定的账号已经有人使用，请使用其他账号');";
        echo "history.back();";
        echo "</script>";
    }else{
        mysqli_free_result($result);

        $sql = "INSERT INTO users(account,password,name,sex,year,month,day,telephone,cellphone,address,email,url,comment)
                VALUES('$account','$password','$name','$sex','$year','$month','$day','$telephone','$cellphone','$address','$email','$url','$comment')";
        
        $result = execute_sql($link,'member',$sql);

        mysqli_close($link);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>新增账号成功</title>
    </head>
    <body>
        <p align='center'><img src="Success.jpg">
        <p align='center'>恭喜您已经注册成功了，您的数据如下：（请勿按刷新按钮）<br>
            账号：<font color='#FF0000'><?php echo $account; ?></font><br>
            密码：<font color="#FF0000"><?php echo $password; ?></font><br>
            请记下您的账号和密码，然后<a href="index.html">登录网站</a>
        </p>
    </body>
</html>
