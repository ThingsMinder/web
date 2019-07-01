<?php
    $passed = $_COOKIE['passed'];
    
?>






<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script type="text/javascript">
            function check_data(){
                if(document.myForm.job_number.value.length == 0){
                    alert("工号不能为空！");
                    return false;
                }else if(document.myForm.job_number.value.length > 10){
                    alert('工号不能超过10个字符');
                    return false;
                }else if(document.myForm.password.value.length == 0){
                    alert('密码不能为空');
                    return false;
                }else if(document.myForm.password.value.length > 10){
                    alert('密码不能超过10个字符');
                    return false;
                }else if(document.myForm.re_password.value != document.myForm.password.value){
                    alert('两次密码输入不一致');
                    return false;
                }else if(document.myForm.name.value.length == 0){
                    alert('真实姓名不能为空');
                    return false;
                }else if(document.myForm.name.value.length > 10){
                    alert('真实姓名不能超过10个字符');
                    return false;
                }else if(document.myForm.telephone.value.length == 0){
                    alert('电话号码不能为空');
                    return false;
                }else if(document.myForm.telephone.value.length > 11){
                    alert('电话号码不能超过11个字符');
                    return false;
                }else{
                    myForm.submit();
                }
            }
        </script>
    </head>
    <body>
        <p align='center'>
            <img src="2.jpg" height="200" width="200"><br>
        </p>
        <form name="myForm" action="join.php" method="POST">
            <table border="1" align='center'>
                <tr align='center'>
                    <td align='center' colspan='2'>
                        欢迎注册使用ERP系统<br>
                        (带*为必填项)<br>
                    </td>
                </tr>
            
                <tr>
                    <td align='right'>*工号：</td>
                    <td>
                        <input type="text" name="job_number" size="15" value="">
                        (请输入您的入职工号)
                    </td>
                </tr>

                <tr>
                    <td align='right'>*密码：</td>
                    <td>
                        <input type="password" name="password" size="15">
                        (请使用英文或数字键)
                    </td>
                </tr>

                <tr>
                    <td align='right'>*密码确认：</td>
                    <td>
                        <input name="re_password" type="password" size="15">
                        （请再输入一次密码）
                    </td>
                </tr>

                <tr>
                    <td align='right'>*姓名：</td>
                    <td>
                        <input name="name" type="text" size="15">
                        （请输入您的真实姓名）                            
                    </td>
                </tr>

                <tr>
                    <td align='right'>*电话号码：</td>
                    <td>
                        <input name="telephone" type="text" size="15">
                    </td>
                </tr>

                <tr>
                    <td align='right'>备注：</td>
                    <td>
                        <textarea name="comment" cols="20" rows="3"></textarea>
                    </td>
                </tr>

                <tr>
                    <td align='center' colspan="2">
                        <input type="button" value="注册" onclick="check_data()">
                        <input type="reset" value="重新填写">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>