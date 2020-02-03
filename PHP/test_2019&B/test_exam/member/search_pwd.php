<?php
    $account = $_POST['account'];
    $email = $_POST['email'];
    $show_method = $_POST['show_method'];

    require_once('dbtools.inc.php');
    $link = create_connection();
    $sql = "SELECT name,password FROM users WHERE account = '$account' or email = '$email'";

    $result = execute_sql($link,'member',$sql);
    //$row = mysqli_num_rows($result);

    if(mysqli_num_rows($result) == 0){
        echo "<script type='text/javascript'>
                alert('查询账号不存在。。。');
                history.back();
              </script>";
        
        mysqli_free_result($result);
        mysqli_close($link);
    }else{
        $row = mysqli_fetch_object($result);
        $name = $row->name;
        $password = $row->password;
        echo "<!DOCTYPE html>
              <html>
                <head>
                    <meta charset='utf-8'>
                    <title>显示密码</title>
                </head>
                <body>
                    <p align='center'>$name 您好！您的账号数据如下：<br></p>
                    <p align='center'>
                        账号：$account <br>
                        密码：$password <br>
                        <a href='index.html'>按此登录本站</a>
                    </p>
                </body>
              </html>";

    }



?>