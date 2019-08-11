<!DOCTYPE html>
<html>
    <head>
        <title>投票结果</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p align='center'><img src="title_3.jpg"></p>
        <table align='center' width='600' border="1" bordercolor='#990033'>
            <tr bgcolor='#CC66FF'>
                <td align='center'><b><font color='#FFFFFF'>候选人</font></b></td>
                <td align='center'><b><font color='#FFFFFF'>得票数</font></b></td>
                <td align='center'><b><font color='#FFFFFF'>得票百分比</font></b></td>
                <td align='center'><b><font color='#FFFFFF'>直方图</font></b></td>
            </tr>
            <tr bgcolor='#FFCCFF'>
            <?php
                require_once('dbtools.inc.php');

                $link = create_connection();
                $sql = 'SELECT * FROM candidate';
                $result = execute_sql($link,'vote',$sql);

                $total_records = mysqli_num_rows($result);

                $total_score = 0;

                while($row = mysqli_fetch_object($result)){
                    $total_records += $row->$score;
                }

                mysqli_data_seek($result,0);

                for($j=0;$j<$total_records;$j++){
                    $row = mysqli_fetch_assoc($result);

                    $percent = round($row['score']/$total_records,4)*100;

                    echo "<tr>";
                    echo "<td align='center'>".$row['name'].'</td>';
                    echo "<td align='center'>".$row['score'].'</td>';
                    echo "<td align='center'>".$percent.'%</td>';
                    echo "<td height='35'><img src='bar.jpg' width='".($percent*3)."'height='20'></td>";
                    echo "</tr>";
                }

                mysqli_free_result($result);
                mysqli_close($link);
            ?>

            <tr bgcolor='#FFCCFF'>
                <td align='center'>总计</td>
                <td align='center'><?php echo $total_score; ?></td>
                <td align='center'>100%</td>
                <td><img src="bar.jpg" width="300" height="20"></td>
            </tr>
        </table>
        <p align='center'><a href="index.php">回首页</a></p>
    </body>
</html>