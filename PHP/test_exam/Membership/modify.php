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
        $_result = execute_sql($link,'member',$sql);

        $row = mysqli_fetch_assoc($result);

    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>修改会员资料</title>
        <script type="text/javascript">
            function check_data(){
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
                   document.myForm.month.value == 9 | document.myForm.month.value == 11){
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
                if

            }
        </script>

    </head>
    <body>
