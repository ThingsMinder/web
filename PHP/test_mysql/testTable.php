<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>建立数据连接</title>
    </head>
    <body>
        <?php
            require_once('testMySql.php');

            $link = create_connection();
            $sql= "SELECT * FROM products WHERE vend_id='1001'";
            $result = execute_sql($link,"crashcourse",$sql);
            
            echo "<table border='1' align='center'><tr align='center'>";

            for($i=0;$i<mysqli_num_fields($result);$i++){
                echo "<td>".mysqli_fetch_field_direct($result,$i)->name."</td>";
            }
            echo "</tr>";
            while($row=mysqli_fetch_row($result)){
                echo "<tr>";
                for($i=0;$i<mysqli_num_fields($result);$i++){
                    echo "<td>$row[$i]</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($result);
            mysqli_close($link);
            


        ?>
    </body>
</html>