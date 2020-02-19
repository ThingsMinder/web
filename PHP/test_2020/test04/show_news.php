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
        <center><img src='fig1.jpg'></center>
        <?php
            require_once('dbtools.inc.php');

            $id = $_GET['id'];

            $link = create_connection();

            $sql = "SELECT * FROM message WHERE id = $id";

            $result = execute_sql($link,'news',$sql);


            echo "<table width='800' align='center' cellspacing='3'>";
            echo "<tr height='40'>
                    <td colspan='2' align='center' bgcolor='#663333'>
                        <font color='white'>
                            <b>
                                讨论主题
                            </b>
                        </font>
                    </td>
                  </tr>";
            
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td bgcolor='#CCFFCC'>主题:".$row["subject"]." ";
                echo "作者：".$row['author']." ";
                echo "时间：".$row['date']."</td></tr>";
                echo "<tr height='40'><td bgcolor='CCFFFF'>";
                echo $row['content']."</td></tr>";
                
            }

            echo "</table>";

            //释放内存空间
            mysqli_free_result($result);


            $sql = "SELECT * FROM reply_message WHERE reply_id = $id";
            $result = execute_sql($link,'news',$sql);

            if(mysqli_num_rows($result)<>0){
                echo "<hr>";
                echo "<table width='800' align='center' cellspacing='3'>";
                echo "<tr height='40'>
                      <td colspan='2' align='center' bgcolor='#99CCFF'>
                        <font color='#FF3366'>
                            <b>
                                回复主题
                            </b>
                        </font>
                      </td>
                     </tr>"; 
            }

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td bgcolor='#FFFF99'>主题:".$row['subject']." ";
                echo "作者：".$row['author']." ";
                echo "时间：".$row['date']."</td></tr>";
                echo "<tr><td bgcolor='CCFFFF'>";
                echo $row['content']."</td></tr>";
                
            }


            echo "</table>";


            //释放内存空间
            mysqli_free_result($result);


            //关闭数据连接
            mysqli_close($link);

        ?>

        <hr>

        <form name="myForm" action="post_reply.php" method="post">
            <input type="hidden" name="reply_id" value="<?php echo $id; ?>">
            <table border="0" width='800' align='center' cellspacing='0'>
                <tr bgcolor='#0084CA' align='center'>
                    <td colspan="2">
                        <font color='white'>请在此输入您的回复</font>
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
                        <input type="button" value='回复讨论' onclick="check_data()">
                        <input type="reset" value="重新输入">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
