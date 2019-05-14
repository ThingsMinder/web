<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>建立数据连接</title>
    </head>
    <body>
        <?php
            function create_connection(){
                $link = mysqli_connect('localhost','root','11111111')
                    or die('无法建立连接： '.mysqli_errno().' '.mysqli_error());
                mysqli_query($link,'SET NAMES utf8');
                return $link;
            }

            function execute_sql($link,$database,$sql){
                mysqli_select_db($link,$database)
                    or die('无法打开'.$database.'数据库: '.mysqli_errno().' '.mysqli_error());
                $result = mysqli_query($link,$sql);
                return $result;
            }

            /*
            $link = create_connection();
            $sql = "SELECT * FROM products WHERE vend_id ='1001'";
            $result = execute_sql($link,"crashcourse",$sql);

            echo '包含'.mysqli_num_rows($result).'笔交易'.'<br>';
            echo "包含".mysqli_num_fields($result).'个字段';
            */



        ?>
    </body>