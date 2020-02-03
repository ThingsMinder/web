<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Page</title>
    </head>
    <body>
        <?php
            $var = $_GET["test"];
            while($var){
                echo 'I Love '.$var;
                break;
            }
        ?>
    </body>
</html>