<?php
    $passed = $_COOKIE['passed'];

    if($passed != 'TRUE'){
        echo "您尚未登录，请登录后再使用本站";
        header('location:index.html');
    }else{
        $id = $_COOKIE['id'];
        require_once('dbtools.inc.php');
        $link = create_connection();
        $sql = "SELECT * FROM users WHERE id = $id";
        $result = execute_sql($link,'member',$sql);
        $row = mysqli_fetch_assoc($result);
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modify Member Info</title>
        <script type="text/javascript">
            function check_data(){
                if(document.myForm.password.value.length == 0){
                    alert('密码不能为空哦。。。');
                    return false;
                }else if(document.myForm.password.value.length > 10){
                    alert('密码不能超过10个字符哦。。。');
                    return false;
                }else if(document.myForm.re_password.value == 0){
                    alert("“密码确认”不能为空哦。。。。");
                    return false;
                }else if(document.myForm.password.value != document.myForm.re_password.value){
                    alert('前后密码不一致哦。。。');
                    return false;
                }else if(document.myForm.name.value.length == 0){
                    alert("“真实姓名”不能为空哦。。。");
                    return false;
                }else{
                    myForm.submit();
                }
            }
        </script>
    </head>
    <body>
        <p align='center'><img src="modify.jpg"></p>
        <p align='center'>
            <form method="POST" name="myForm" action="update.php">
                <table border="2" align='center' bordercolor="#6666FF">
                    <tr align='center'>
                        <td align='center' colspan="2" bgcolor='#6666FF'>
                            <font>Please input your real information(must be input if "*" above it)</font>
                        </td>
                    </tr>

                    <tr bgcolor='#99FF99'>
                        <td align='right'>*账号：</td>
                        <td><?php echo $row['account'] ?> (请使用英文或者数字键)</td>
                    </tr>

                    <tr bgcolor='#99FF99'>
                        <td align='right'>*密码：</td>
                        <td><input type="password" name="password" size="15" value="<?php echo $row['password'] ?>">(请使用英文或数字键)</td>
                    </tr>

                    <tr bgcolor='#99FF99'>
                        <td align='right'>*密码确认：</td>
                        <td><input type="password" name="re_password" size="15" value="<?php echo $row['password'] ?>">再输入一次密码</td>
                    </tr>

                    <tr bgcolor='#99FF99'>
                        <td align='right'>*真实姓名：</td>
                        <td><input type="text" name="name" size="10" value="<?php echo $row['name'] ?>"></td>
                    </tr>

                    <tr bgcolor='#99FF99'>
                        <td align='right'>*性别</td>
                        <td>
                            <input type="radio" name="sex" value="男" checked>男
                            <input type="radio" name="sex" value="女">女
                        </td>
                    </tr>

                    <tr bgcolor='#99FF99'>
                        <td align='right'>电话：</td>
                        <td>
                            <input type="text" name="telephone" size="15" value="<?php echo $row['telephone'] ?>">
                        </td>
                    </tr>
                </table>

                <p align='center'>
                    <input type="button" value="修改资料" onclick="check_data()">
                    <input type="reset" value="重新填写">                    
                </p>

            </form>

