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

            $URL = $_POST['mySelect'];
            header("location:$URL");
            exit();



        ?>
    </body>
</html>