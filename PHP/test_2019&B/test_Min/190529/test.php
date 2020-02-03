<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>测试后台</title>
    </head>
    <body>
        <?php
            require_once('dbtool.php');
            $link = create_connection();

            $a = $_GET['a'];
            $b = $_GET['b'];
            $c = $_GET['c'];
            $d = $_GET['d'];
            $e = $_GET['e'];
            $f = $_GET['f'];

            echo $a." ".$b.' '.$c.' '.$d.' '.$e.' '.$f.'<br>';

            $sql = "INSERT INTO customers(cust_name,
                                          cust_address,
                                          cust_city,
                                          cust_state,
                                          cust_zip,
                                          cust_country)
                                          VALUES('$a','$b','$c','$d','$e','$f')";
            
            $result = execute_sql($link,"crashcourse",$sql);
           

            mysqli_close($link);
        ?>
    </body>
</html>