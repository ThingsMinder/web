<?php
    require_once('dbtools.inc.php');
    $album_id = $_GET['album_id'];

    //获取影虎登录的账号
    session_start();
    $login_user = $_SESSION['login_user'];

    //建立数据连接
    $link = create_connection();

    //删除存储在硬盘的照片文件
    $sql = "SELECT filename FROM photo WHERE album_id = $album_id
            AND EXISTS (SELECT '*' FROM album WHERE id = $album_id AND owner = '$login_user')";
    
    $result = execute_sql($link,'album',$sql);

    while($row = mysqli_fetch_assoc($result)){
        $file_name = $row['filename'];
        $photo_path = realpath("./Photo/$file_name");
        $thumbnail_path = realpath("./Thumbnail/$file_name");
    }

    if(file_exists($photo_path)){
        unlink($photo_path);
    }
    if(file_exists($thumbnail_path)){
        unlink($thumbnail_path);
    }

    //删除存储在数据库的照片信息
    $sql = "DELETE FROM photo WHERE album_id = $album_id
            AND EXISTS (SELECT '*' FROM album WHERE id = $album_id AND owner = '$login_user')";
    execute_sql($link,'album',$sql);

    //删除存储在数据库的相册信息
    $sql = "DELETE FROM album WHERE album_id = $album_id 
            AND EXISTS (SELECT '*' FROM album WHERE id = $album_id AND owner = 'login_user')";
    
    execute_sql($link,'album',$sql);

    //删除存储在数据库的相册信息
    $sql = "DELETE FROM album WHERE id = $album_id AND owner = '$login_user'";
    execute_sql($link,'album',$sql);

    //释放内存空间
    mysqli_free_result($result);

    //关闭数据连接
    mysqli_close($link);

    header('location:index.php');

?>