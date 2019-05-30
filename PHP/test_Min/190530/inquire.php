<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>客户信息输出</title>
    </head>
    <body>
        <?php
            require_once('dbtool.php');
            $link = create_connection();
            $cust_name = $_GET['cust_name'];
            function sql($what){
                $sql = "SELECT * FROM customers WHERE cust_$what=$cust_$what";
                return $sql;
            }
            //$sql = "SELECT * FROM customers WHERE cust_name=$cust_name";
            
            function result(){
                $result = execute_sql($link,'thingsmind',$sql);
                return $result;
            }
            

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