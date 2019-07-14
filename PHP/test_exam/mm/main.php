<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>main</title>
        <script type="text/javascript">
            function check_data(){
                if(document.myForm.subject.value.length == 0){
                    alert("主题字段不能为空!");
                }else if(document.myForm.content.value.length == 0){
                    alert("内容字段不能为空！");
                }else{
                    myForm.submit();
                }
            }
        </script>
    </head>
    <body>
        <p align='right'><img src="2.jpg" height="20" width="20">
            <a href="modify.php">修改资料</a>
            <a href="delete.php">删除资料</a>
            <a href="logout.php">退出登录</a>    
        </p>


        <?php
            $id = $_COOKIE['id'];
            $job_number = $_POST['job_number'];
            require_once('dbtools.inc.php');

            $link = create_connection();
            $sql1 = "SELECT * FROM users WHERE job_number = $job_number";
            $result1 = execute_sql($link,'mm',$sql1);
            $row1 = mysqli_fetch_assoc($result1);

            /*
            $sql = "SELECT id,author,subject,date FROM message ORDER BY date DESC";
            $result = execute_sql($link,'mm',$sql);         
            $records_per_page = 5;
            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }
            $total_records = mysqli_num_rows($result);

            $total_pages = ceil($total_pages/$records_per_page);

            $started_record = $records_per_page * ($page - 1);

            mysqli_data_seek($result,$started_record);

            echo "<table width='800' align='center' cellspacing='3'>";

            $bg[0] = '#D9D9FF';
            $bg[1] = '#FFCAEE';
            $bg[2] = '#FFFFCC';
            $bg[3] = '#B9EEB9';
            $bg[4] = '#B9E9FF';

            $j = 1;
            while($row = mysqli_fetch_assoc($result) and $j <= $records_per_page){
                echo "<tr>";
                echo "<td width='120' align='center'><img src='".mt_rand(0,9)." .gif'></td>";
                echo "<td bgcolor='".$bg[$j-1]."'>作者:".$row['author'].'<br>';
                echo "主题：".$row['subject'].'<br>';
                echo "时间：".$row['date'].'<br>';
                echo "<a href='show_news.php?id=";
                echo $row['id']."'>阅读与加入讨论</a></td></tr>";
                $j++;
            }

            echo "</table>";

            echo "<p align='center'>";

            if($page>1){
                echo "<a href='index.php?page=".($page-1)."'>上一页</a>";
            }

            for($i=1;$i<=$total_pages;$i++){
                if($i == $page){
                    echo $i;
                }else{
                    echo "<a href='index.php?page=$i'>$i</a>";
                }
            }

            if($page<$total_pages){
                echo "<a href='index.php?page=".($page+1)."'>下一页</a>";
            }

            echo "</p>";

            mysqli_free_result($result);
            */
            mysqli_free_result($result1);
            mysqli_close($link);
            

        ?>
        <form method="post" action="post.php" name="myForm">
            <table border="0" width='800' align='center' cellspacing='0'>
                <tr bgcolor='#0084CA' align='center'>
                    <td colspan="2"><font color='white'>请在此输入新的讨论</font></td>
                </tr>
                <tr bgcolor='#D9F2FF'>
                    <td width='15%'>作者:</td>
                    <td width='85%'>
                        <?php 
                            echo $row1{"name"};
                        ?>
                    </td>
                </tr>
                <tr bgcolor='#84D7FF'>
                    <td width='15%'>主题:</td>
                    <td width='85%'><input name="subject" type="text" size="50"></td>
                </tr>
                <tr>
                    <td width='15%'>内容:</td>
                    <td width='85%'><textarea name="content" cols='50' rows="5"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" height='40' align='center'>
                        <input type="button" value="发帖" onclick="check_data()">
                        <input type="reset" value="重新输入">
                    </td>
                </tr>
            </table>
        </form>

    </body>
</html>






