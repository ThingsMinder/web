<?php
    require_once('dbtools.inc.php');
    header("Content-type:text/html;charset=utf-8");

    $account = $_POST['account'];
    $email = $_POST['email'];
    $show_method = $_POST['show_method'];

    $link = create_connection();
    $sql = "SELECT name,password FROM users WHERE account='$account' or email='$email'";
    $result = execute_sql($link,'member',$sql);

    if(mysqli_num_rows($result) == 0){
        echo "<script type='text/javascript'>
                alert('您所查询的资料不存在，请检查是否输入错误.');
                history.back();
            </script>";
        
    }else{
        $row = mysqli_fetch_object($result);
        $name = $row->name;
        $password = $row->password;
        $message = "<!DOCTYPE html>
                    <html>
                        <head>
                            <title></title>
                            <meta http-equiv='Content-Type' content='text/html;charset=utf-8'>
                        </head>
                        <body>
                            $name 您好，您的账号数据如下：<br><br>
                                       账号：$account<br>
                                       密码：$password<br><br>
                                  <a href='index.html'>按此登录本站</a>
                        </body>
                    </html>";
        if($show_method == '网页显示'){
            echo $message;
        }else{
            $subject = "=?utf-8?B?".base64_encode('账号通知')."?=";
            $headers = "MIME-Version:1.0\r\nContent-type:text/html;charset=utf-8\r\n";
            mail($email,$subject,$message,$headers);
            echo "$name,您好！您的账号数据研究寄至$email<br><br>
                    <a href='index.html'>按此登录本站</a>";
        }
    }

    mysqli_free_result($result);
    mysqli_close($link);
?>