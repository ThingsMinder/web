<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ePhoto</title>
        <script type="text/javascript">
            function DeleteAlbum(album_id){
                if(confirm('请确认是否删除此相册？'))
                    location.href = 'delAlbum.php?album_id=' + album_id;
            }
        </script>
    </head>
    <body>
        <h1>testpage</h1>
        <p align='center'><img src='Title.png'></p>
        <?php

            require_once('dbtools.inc.php');

            //获取用户登录的账号和名称
            session_start();
                if(isset($_SESSION['login_user'])){
                    $login_user = $_SESSION['login_user'];
                    $login_name = $_SESSION['login_name'];
                }
            
            $link = create_connection();

            //获取所有相册数据
            $sql = 'SELECT id,name,owner FROM album order by name';

            $album_result = execute_sql($link,"album",$sql);
            
            //测试代码
            //echo "dwdwdw";

            //获取相册数目
            $total_album = mysqli_num_rows($album_result);

            echo "<p align='center'>$total_album ALbums</p>";
            echo "<table border='0' align='center'>";

            //设置每行显示几个相册
            $album_per_row = 5;

            //显示相册列表
            $i = 1;
            while($row = mysqli_fetch_assoc($album_result)){
                //获取相册编号、名称及主人
                $album_id = $row['id'];
                $album_name = $row['id'];
                $album_owner = $row['owner'];

                $sql = "SELECT filename FROM photo WHERE album_id = $album_id";
                $photo_result = execute_sql($link,'album',$sql);

                //获取相册包含的照片数目
                $total_photo = mysqli_num_rows($photo_result);

                //若照片数目大于0，就以第一张当作封面，否则以None.png当作封面
                if($total_photo > 0){
                    mysqli_fetch_object($photo_result) -> filename;
                }else{
                    $cover_photo = 'None.png';
                }

                mysqli_free_result($photo_result);

                if($i % $album_per_row == 1){
                    echo "<tr align='center' valign='top'>";
                }

                echo "<td width='160px'>
                      <a href='showAlbum.php?album_id=$album_id'>
                      <img src='Thumbnail/$cover_photo'
                       style='border-color:Black;border-width:1px'>
                      <br>$album_name</a><br>$total_photo Pictures";
                
                if(isset($login_user) && $album_owner == $login_user){
                    echo "<br>
                          <a href='editAlbum.php?album_id=$album_id'>编辑</a>
                          <a href='#' onclick='DeleteAlbum($album_id)'>删除</a>";
                }

                echo "<p></td>";

                if($i % $album_per_row == 0 || $i == $total_album){
                    echo "</tr>";
                }

                $i++;
            }

            echo "</table>";

            //释放内存空间
            mysqli_free_result($album_result);

            //关闭数据连接
            mysqli_close($link);

            echo "<hr><p align='center'>";

            //若isset($login_name)返回FALSE，表示用户尚未登录
            if(!isset($login_name)){
                echo "<a href='logon.php'>登录</a>";
            }else{
                echo "<a href='addAlbum.php'>新增相册</a>
                      <a href='logout.php'>注销 “ $login_name ”</a>";
            }
            
        ?>
    </body>
</html>