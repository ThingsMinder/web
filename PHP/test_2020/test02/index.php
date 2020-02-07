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
            $album_result = execute_sql($link,'album',$sql);
            
        
        ?>
    </body>
</html>