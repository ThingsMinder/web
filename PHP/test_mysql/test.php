<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>建立数据连接</title>
    </head>
    <body>
        <?php
            
            $link = mysqli_connect("localhost","root","11111111") 
                    or die("无法建立数据连接: ".mysqli_connect_errno()." ".mysqli_connect_error());
            echo "成功建立数据连接"."<br>".'<br>';
            

            echo "MySQL客户端的数据库版本： ".mysqli_get_client_info()."<br>".'<br>';
            echo "连接主机为： ".mysqli_get_host_info($link).'<br>'.'<br>';
 
            //下面这个描述是必须使用单引号 
            echo '$link 资源变量的协议版本为: '.mysqli_get_proto_info($link).'<br>'.'<br>';

            echo '$link 连接主机的数据库版本为: '.mysqli_get_server_info($link).'<br>'.'<br>';

            mysqli_select_db($link,'crashcourse') 
                or die('无法打开crashcourse数据库： '.mysql_error($link));
            
            $sql = "SELECT * FROM products WHERE vend_id = '1001'";
            $result = mysqli_query($link,$sql);
            



            mysqli_close($link);
        ?>
    </body>
</html>