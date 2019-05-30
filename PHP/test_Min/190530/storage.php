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

            $cust_name = $_GET['cust_name'];
            $cust_city = $_GET['cust_city'];
            $cust_contact = $_GET['cust_contact'];

            $sql = "INSERT INTO customers(cust_name,
                                          cust_city,
                                          cust_contact)
                                          VALUES('$cust_name',
                                                 '$cust_city',
                                                 '$cust_contact')";
            
            $result = execute_sql($link,"thingsmind",$sql);
           

            mysqli_close($link);
        ?>
    </body>
</html>