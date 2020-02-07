<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>whatever</title>
    </head>
    <body>
        <h1>whatever</h1>
        <?php
        /*
            echo "Hello!"."<br>";
            $a = 11;
            echo ~$a;
            echo "<br>";

            $greet = function($name){
                echo "Hello "."\r"."!"."\n".$name;
            };

            $greet('World');
            $greet('PHP');

            echo "<br>";

            $path = $_SERVER['PHP_SELF'];
            echo basename($path).'<br>';
            echo basename($path,'.php').'<br>';
        */
        
        /*
            $URL = $_POST['mySelect'];
            header("location:$URL");
            exit();

        */
        
        
        $link = mysqli_connect('localhost','root','111111111')or die('无法建立数据连接: '.mysqli_errno().' '.mysqli_error());
        echo '成功建立数据连接';
        echo "<br>";
        echo 'Mysql 客户端函数库的版本： '.mysqli_get_client_info()."<br>";
        echo "连接主机为： ".mysqli_get_host_info($link)."<br>";
        echo "资源变量的协议版本为: ".mysqli_get_proto_info($link)."<br>";
        echo '$link 连接主机的数据库版本为： '.mysqli_get_server_info($link).'<br>';
        mysli_close($link);
        

        

        ?>
    </body>
</html>