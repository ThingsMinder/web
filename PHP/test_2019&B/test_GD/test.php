<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Page</title>
    </head>
    <body>
        <?php

            $handle = fopen('abc.txt','w+');
            $num = $_GET['num'];
            $contents = $_GET['contents'];
            for($i=0;$i<$num;$i++){
                for($j=$num;$j>$i;$j--){
                    $contents.='I';
                    fwrite($handle,$contents);
                    echo $contents;
                }
                echo '<br>';
            }
            fclose($handle);

        ?>
    </body>
</html>