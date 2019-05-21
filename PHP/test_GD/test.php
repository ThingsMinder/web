<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My Page</title>
    </head>
    <body>
        <?php

            $handle = fopen('abc.txt','w+');
            $num = $_POST['num'];
            $contents = '';
            for($i=0;$i<$num;$i++){
                for($j=$num;$j>$i;$j--){
                    $contents.='I';
                    fwrite($handle,$contents);
                    echo 'I';
                }
                echo '<br>';
            }
            fclose($handle);

        ?>
    </body>
</html>