<html>
    <head>
        <title>PHP with MySQL</title>>
    </head>
    <body>
        <?php
        /*
            $retval = mysql_function(value);
            if(!$retval){
                die("相关错误信息");
            }
        */

        $con = mysql_connect('ThingsMind.local:3306','root','11111111');
        if(!con){
            die('Could not connect:'.mysql_error());
        }
        else{
            echo "连接成功";
        }
        
        //mysql_close($con);
        ?>
    </body>
</html>