<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Show Record</title>
    </head>
    <body>
        <?php
            require_once('testMySql.php');
            
            $records_per_page = 1;

            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }

            $link = create_connection();

            $sql = "SELECT * FROM products WHERE vend_id = '1001'";
            $result = execute_sql($link,'crashcourse',$sql);

            $total_fields = mysqli_num_fields($result);

            $total_records = mysqli_num_rows($result);

            $total_pages = ceil($total_records/$records_per_page);

            $started_record = $records_per_page * ($page - 1);

            mysqli_data_seek($result,$started_record);

            echo "<table border='1' align='center' width='800'>";
            echo "<tr align='center'>";
            for($i=0;$i<$total_fields;$i++){
                echo "<td>".mysqli_fetch_field_direct($result,$i)->name."</td>";
            }
            echo "</tr>";

            $j=1;
            while($row=mysqli_fetch_row($result) and $j<=$records_per_page){
                echo "<tr>";
                for($i=0;$i<$total_fields;$i++){
                    echo "<td>$row[$i]</td>";
                }
                $j++;
                echo "</tr>";
            }

            echo "<p align='center'>";
            if($page>1){
                echo "<a href='showRecord.php?page=".($page-1)."'>上一页</a>";
            }
            for($i=1;$i<=$total_pages;$i++){
                if($i==$page){
                    echo "$i ";
                }else{
                    echo "<a href='showRecord.php?page=$i'>$i</a>";
                }
            }
            if($page<$total_pages){
                echo "<a href='showRecord.php?page=".($page+1)."'>下一页</a>";
            }
            echo "</p>";

            mysqli_free_result($result);
            mysqli_close($link);

        ?>
    </body>
</html>