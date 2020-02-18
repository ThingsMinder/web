<?php
    if(isset($_POST['account'])){
        require_once('dbtools.inc.php');

        //获取用户登录的账号与密码
        $login_user = $_POST['account'];
        $login_password = $_POST['password'];

        //建立数据连接
        $link = create_connection();

        //验证账号和密码是否正确
        $sql = "SELECT account,name FROM user WHERE account = '$login_user' AND password = '$login_password'";
        $result = execute_sql($link,'album',$sql);

        //若没找到数据，表示账号与密码错误
        if(mysqli_num_rows($result) == 0){
            //释放内存空间
            mysqli_free_result($result);

            //关闭数据连接
            mysqli_close($link);

            //显示信息要求用户输入正确的账号与密码
            echo "<script type='text/javascript'>alert('账号密码错误，请查明后再登录')</script>";
        }else{
            //将用户数据存储在Session
            session_start();
            $row = mysqli_fetch_object($result);
            $_SESSION['login_user'] = $row->account;
            $_SESSION['login_name'] = $row->name;

            //释放内存空间
            mysqli_free_result($result);

            //关闭数据连接
            mysqli_close($link);

            header('location:index.php');
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>电子相册</title>
    </head>
    <body>
        <p align='center'><img src="Title.png"></p>
        <form action="logon.php" method="post" name="myForm">
            <table align='center'>
                <tr>
                    <td>
                        账号：
                    </td>
                    <td>
                        <input type="text" name='account' size='15'>
                    </td>
                </tr>
                <tr>
                    <td>
                        密码：
                    </td>
                    <td>
                        <input type="password" name="password" size="15">
                    </td>
                </tr>
                <tr>
                    <td align='center' colspan="2">
                        <input type="submit" value="登录">
                        <input type="reset" value="重新填写">
                    </td>
                </tr>
            </table>
        </form>
    </body>