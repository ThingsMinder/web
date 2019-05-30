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
            $cust_name = $_GET["cust_name"];
            $cust_city = $_GET['cust_city'];
            $all = $_GET['all'];

            if($cust_name && !$cust_city){
                $sql = "SELECT * FROM customers WHERE cust_name='$cust_name'"; 
            }elseif($cust_city && !$cust_name){
                $sql = "SELECT * FROM customers WHERE cust_city='$cust_city'"; 
            }elseif($all = 'all'){
                $sql = "SELECT * FROM customers";
            }else{
                echo "查询错误,请重新输入！";
            }

                   
            $result = re_execute_sql($link,"thingsmind",$sql);

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