<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contact me</title>
    </head>
    <body>
        <?php
            require_once('testMySql.php');
            $link = create_connection();
            $sql = "SELECT * FROM products WHERE vend_id='1001'";
            $result = execute_sql($link,'crashcourse',$sql);

            echo "<table width='400' border='1' align='center'><tr align='center'>";
            echo "<td>name</td><td>data_type</td><td>max_lenth</td></tr>";

            //$i = 0;
            while($row = mysqli_fetch_field($result)){
                echo "<tr>";
                echo "<td>".$row->name."</td>";
                echo "<td>".$row->type."</td>";
                echo "<td>".$row->max_length."</td>";
                echo "</tr>";
            }

            mysqli_close($link);

            //谨以此程序纪念我被折腾的这半年
            //20181212-20190514




        ?>
    </body>
</html>