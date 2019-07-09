<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>main</title>
        <script type="text/javascript">
            function check_data(){
                if(document.myForm.subject.value.length == 0){
                    alert("主题字段不能为空!");
                }else if(document.myForm.content.value.length == 0){
                    alert("内容字段不能为空！");
                }else{
                    myForm.submit();
                }
            }
        </script>
    </head>
    <body>
        <p align='right'><img src="2.jpg" height="20" width="20">
            <a href="modify.php">修改资料</a>
            <a href="delete.php">删除资料</a>
            <a href="logout.php">退出登录</a>    
        </p>

        <?php
            require_once('dbtools.inc.php');

            $records_per_page = 5;
            



        ?>




    </body>
</html>






