<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>后台</title>
    </head>
    <body>
        <?php 
            function create_connection(){
                $link = mysqli_connect('localhost','root','11111111')
                        or die('无法建立数据连接：'.mysqli_connect_error());
                mysqli_query($link,'SET NAMES utf8');
                return $link;                
            }

            function execute_sql($link,$database,$sql){
                //echo 'II';
                mysqli_select_db($link,$database) 
                    or die('无法连接数据库： '.mysqli_error($link));
                
                $result = mysqli_query($link,$sql);
                echo 'II';
                if($result){
                    echo '!!';
                }
                return $result;
            }
        ?>
    </body>
</html>