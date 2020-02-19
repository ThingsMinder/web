<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>blog</title>
        <script type="text/javascript">
            function check_data(){
                if(document.myForm.author.value.length == 0){
                    alert("作者字段不能空白！");
                }else if(document.myForm.subject.value.length == 0){
                    alert("主题部分不能空白！");
                }else if(document.myForm.content.value.length == 0){
                    alert("内容不能空白！");
                }else{
                    myForm.submit();
                }
            }
        </script>
    </head>
    <body>
        <p align='center'><img src='fig.jpg'></p>
        <?php
            require_once('dbtools.inc.php');

            $records_per_page = 10;

            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }

            $link = create_connection();

            $sql = "SELECT id,author,subject,date FROM message ORDER BY date DESC";
            $result = execute_sql($link,'news',$sql);

            $total_records = mysqli_num_rows($result);

            $total_pages = ceil($total_records/$records_per_page);

            // 计算本页第一条记录的序号
            $started_record = $records_per_page * ($page - 1);
            //将记录指针移至本页第一条记录的序号
            mysqli_data_seek($result,$started_record);

            echo "<table width='800' align='center' cellspacing='3'>";

            //使用背景颜色
            $bg[0] = "#D9D9FF";
            $bg[1] = "#FFCAEE";
            $bg[2] = "#FFFFCC";
            $bg[3] = "#B9EEB9";
            $bg[4] = "#B9E9FF";

            $j = 1;
            while($row = mysqli_fetch_assoc($result) and $j <= $records_per_page){
                echo "<tr>";
                echo "<td width='120' align='center'><img src='".mt_rand(0,9).".gif'></td>";
                echo "<td bgcolor='".$bg[$j - 1]."'>作者:".$row['author']."<br>";
                echo "主题：".$row['subject']."<br>";
                echo "时间：".$row['date']."<hr>";
                echo "<a href='show_news.php?id=";
                echo $row['id']."'>阅读与加入讨论</a></td></tr>";
                
                $j++;
            }

            echo "</table>";

            //产生导航条
            echo "<p align='center'>";

            if($page > 1){
                echo "<a href='index.php?page=".($page - 1)."'>上一页</a>";
            }

            for($i = 1; $i <= $total_pages; $i ++){
                if($i == $page){
                    echo "$i";
                }else{
                    echo "<a href='index.php?page=$i'>$i</a>";
                }
            }

            if($page < $total_pages){
                echo "<a href='index.php?page=".($page + 1)."'>下一页</a>";
            }

            echo "</p>";

            //释放内存空间
            mysqli_free_result($result);

            //关闭数据连接
            mysqli_close($link);

        ?>

        <hr>

        <form name="myForm" action="post.php" method="post">
            <table border="0" width='800' align='center' cellspacing='0'>
                <tr bgcolor='#0084CA' align='center'>
                    <td colspan="2">
                        <font color='white'>请在此输入新的讨论</font>
                    </td>
                </tr>
                <tr bgcolor='#D9F2FF'>
                    <td width='15%'>
                        作者
                    </td>
                    <td width='85%'>
                        <input name="author" type="text" size="50">
                    </td>
                </tr>
                <tr bgcolor='#84D7FF'>
                    <td width='15%'>
                        主题
                    </td>
                    <td width='85%'>
                        <input name='subject' type="text" size="50">
                    </td>
                </tr>
                <tr bgcolor='#D9F2FF'>
                    <td width='15%'>
                        内容
                    </td>
                    <td width='85%'>
                        <textarea name="content" cols="50" rows="5"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" height='40' align='center'>
                        <input type="button" value='张贴讨论' onclick="check_data()">
                        <input type="reset" value="重新输入">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
