<?php
    $passed = $_COOKIE['passed'];

    if($passed != 'TRUE'){
        header('location:index.html');
        exit();
    }else{
        require_once('dbtools.inc.php');
        $id = $_COOKIE['id'];

        $link = create_connection();

        $sql = "SELECT * FROM users WHERE id = $id";
        $result = execute_sql($link,'member',$sql);

        $row = mysqli_fetch_assoc($result);
        //echo $row["password"];
          

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>修改会员资料</title>
        <script type="text/javascript">  
            function check_data()
            {
                if(document.myForm.password.value.length == 0){
                    alert("“用户密码”一定要填写哦。。。");
                    return false;
                }
                if(document.myForm.password.value.length > 10){
                    alert("“用户密码”不可以超过10个字符哦。。。");
                    return false;
                }
                if(document.myForm.re_password.value.length == 0){
                    alert("“密码确认”字段忘了填写哦。。。");
                    return false;
                }
                if(document.myForm.password.value != document.myForm.re_password.value){
                    alert("“密码确认”字段与“用户密码”字段一定要相同。。。");
                    return false;
                }
                if(document.myForm.name.value.length == 0){
                    alert("您一定要留下真实姓名哦。。。");
                    return false;
                }
                if(document.myForm.year.value.length == 0){
                    alert("您忘了填“出生年份”字段了。。。");
                    return false;
                }
                if(document.myForm.month.value.length == 0){
                    alert("您忘了填“出生月份”字段了。。。");
                    return false;
                }
                if(document.myForm.month.value > 12 | document.myForm.month.value < 1){
                    alert("“出生月份”应该介于1-12之间哦！");
                    return false;
                }
                if(document.myForm.day.value.length == 0){
                    alert("您忘了填“出生日期”字段了。。。");
                    return false;
                }
                if(document.myForm.month.value == 2 | document.myForm.month.value == 6
                   | document.myForm.month.value == 9 | document.myForm.month.value == 11){
                       if(document.myForm.day.value > 30){
                           alert("4月、6月、9月、11月只有30天哦！");
                           return false;
                       }else{
                           if(document.myForm.day.value > 31){
                               alert("1月、3月、5月、7月、8月、10月、12月只有31天哦！");
                               return false;
                           }
                       }
                   }
                if(document.myForm.day.value > 31 | document.myForm.day.value < 1){
                    alert("出生日期应该在1-31之间");
                    return false;
                }
                myForm.submit();
            }
           
        </script>

    </head>
    <body>

        <p align='center'><img src='modify.jpg'></p>
        <form action="update.php" name="myForm" method="POST">
            <table border="2" align="center" bordercolor="#6666FF">
                <tr>
                    <td colspan="2" align='center' bgcolor='#6666FF'>
                        <font color='FFFFFF'>请填入下列资料（标示“*” 字段请务必填写）</font>
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>*用户账号：</td>
                    <td><?php echo $row["account"]; ?></td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>*用户密码：</td>
                    <td>
                        <input type="password" name="password" size="15" 
                        value="<?php echo $row["password"]; ?>">
                        (请使用英文或数字键，勿使用特殊字符)
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>*密码确认：</td>
                    <td>
                        <input type="password" name="re_password" size="15"
                               value="<?php echo $row["password"]; ?>">
                        （再输入一次密码，并记下您的用户名称与密码）
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>*姓名：</td>
                    <td><input type="text" name="name" size="8"
                         value="<?php echo $row['name']; ?>"></td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>*性别：</td>
                    <td>
                        <input type="radio" name="sex" value="男" checked>男
                        <input type="radio" name="sex" value="女">女
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>*生日：</td>
                    <td>公元
                        <input type="text" name="year" size="4" value="<?php echo $row['year']; ?>">年
                        <input type="text" name="month" size="2" value="<?php echo $row['month']; ?>">月
                        <input type="text" name="day" size="2" value="<?php echo $row['day']; ?>">日
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>电话：</td>
                    <td>
                        <input type="text" name="telephone" size="20" value="<?php echo $row['telephone']; ?>">
                        （依照（02）2311-3836格式 or (04)657-4587)
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>移动电话：</td>
                    <td>
                        <input type="text" name="cellphone" size="20" value="<?php echo $row['cellphone'];?>">
                        （依照（0922）302-228格式）
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>地址：</td>
                    <td>
                        <input type="text" name="address" size="45" value="<?php echo $row['address']; ?>">
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>E-mail：</td>
                    <td>
                        <input type="text" name="email" size="30" value="<?php echo $row['email']; ?>">
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>个人网站：</td>
                    <td>
                        <input type="text" name="url" size="40" value="<?php echo $row['url']; ?>"> 
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td align='right'>备注：</td>
                    <td>
                        <textarea name="comment" rows="4" cols="45"><?php echo $row['comment'];?></textarea>
                    </td>
                </tr>

                <tr bgcolor='#99FF99'>
                    <td colspan="2" align='center'>
                        <input type="button" value="修改资料" onClick="check_data()">
                        <input type="reset" value="重新填写">
                    </td>
                </tr>
              
            </table>
        </form>
    </body>
</html>

<?php
    mysqli_free_result($result);
    mysqli_close($link);
?>



