<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>TEST</title>
        <script type="text/javascript">
            function check_data(){
                if(document.myForm.author.value.length == 0){
                    alert('作者字段不可以空白哦！');
                }else if(document.myForm.subject.value.length == 0){
                    alert('标题不可以为空哦！');
                }else if(document.myForm.content.value.length == 0){
                    alert('内容不可以为空哦！');
                }else{
                    myForm.submit();
                    //document.getElementById('mf').submit();
                }
            }
        </script>
    </head>
    <body>
        <p align='center'><img src="fig.jpg"></p>
        <?php
            require_once('dbtools.inc.php');
            $records_per_page = 5;

            if(isset($_GET['page'])){
                $page = $_GET['page'];
            }else{
                $page = 1;
            }

            $link = create_connection();
            $sql = "SELECT * FROM message ORDER BY date DESC";
            $result = execute_sql($link,'guestbook',$sql);

            $total_records = mysqli_num_rows($result);

            $total_pages = ceil($total_records/$records_per_page);

            $started_record = $records_per_page * ($page - 1);

            mysqli_data_seek($result,$started_record);

            $bg[0] = '#D9D9FF';
            $bg[1] = '#FFCAEE';
            $bg[2] = '#FFFFCC';
            $bg[3] = '#B9EEB9';
            $bg[4] = '#B9E9FF';

            echo "<table width='800' align='center' cellspacing='3'>";

            $j = 1;
            while ($row = mysqli_fetch_assoc($result) and $j <= $records_per_page){
                echo "<tr bgcolor=".$bg[$j - 1].">";
                echo "<td width='120' align='center'>
                      <img src='".mt_rand(0,9).".gif'></td>";
                echo "<td>作者: ".$row['author'].'<br>';
                echo "主题： ".$row['subject'].'<br>';
                echo "时间： ".$row['date'].'<hr>';
                echo $row['content'].'</td></tr>';

                $j++;
            }
            echo "</table>";

            echo "<p align='center'>";
            if($page > 1){
                echo "<a href='index.php?page=".($page-1)."'>上一页</a>";
            }

            for($i=1;$i<=$total_pages;$i++){
                if($i==$page){
                    echo "$i";
                }else{
                    echo "<a href='index.php?page=$i'>$i</a>";
                }
            }

            if($page<$total_pages){
                echo "<a href='index.php?page=".($page+1)."'>下一页</a>";
            }

            echo "</p>";
            
            mysqli_free_result($result);
            mysqli_close($link);

        ?>

        <form name="myForm" method="post" action="post.php">
            <table border='0' width='800' align='center' cellspacing='0'>
                <tr bgcolor="#0084CA" align='center'>
                    <td colspan="2">
                        <font color='#FFFFFF'>请在此输入新的留言</font></td>
                </tr>

                <tr bgcolor='#D9F2FF'>
                    <td width='15%'>作者</td>
                    <td width='85%'>
                    <input name="author" type="text" size="50"></td>
                </tr>

                <tr bgcolor='84D7FF'>
                    <td width='15%'>主题</td>
                    <td width='85%'><input name="subject" type="text" size="50"></td>
                </tr>

                <tr bgcolor='D9F2FF'>
                    <td width='15%'>内容</td>
                    <td width='85%'><textarea name="content" cols="50" rows="5"></textarea></td>
                </tr>

                <tr>
                    <td colspan="2" align='center'>
                        <input type="button" value="张贴留言" onclick="check_data()">
                        <input type="reset" value="重新输入">
                    </td>
                </tr>

            </table>
        </form>
        
    </body>
</html>