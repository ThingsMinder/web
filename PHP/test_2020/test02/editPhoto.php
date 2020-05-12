<?php
    require_once('dbtools.inc.php');

    //获取用户登录的账号
    session_start();
    $login_user = $_SESSION['login_user'];

    $link = create_connection();

    if(!isset($_POST['photo_name'])){
        $photo_id = $_GET['photo_id'];

        //获取相册及照片的信息
        $sql = "SELECT a.name,a.filename,a.comment,a.album_id,b.name AS album_name,
                b.owner FROM photo a,album b where a.id = $photo_id and b.id = a.album_id";

        $result = execute_sql($link,'album',$sql);
        $row = mysqli_fetch_object($result);
        $album_id = $row->album_id;
        $album_name = $row->album_name;
        $album_owner = $row->album_owner;
        $photo_name = $row->name;
        $file_name = $row->filename;
        $photo_comment = $row->comment;

        //释放内存空间
        mysqli_free_result($result);

        //关闭数据连接
        mysqli_close($link);

        if($album_owner != $login_user){
            echo "<script type='text/javascript'>";
            echo "alert('您不是照片的主人，无法修改照片名称')";
            echo "</script>";
        }
    }else{
        $album_id = $_POST['album_id'];
        $photo_id = $_POST['photo_id'];
        $photo_name = $_POST['photo_name'];
        $photo_comment = $_POST['photo_comment'];

        $sql = "UPDATE photo SET name = '$photo_name',comment = '$photo_comment'
                WHERE id = $photo_id AND EXISTS (SELECT '*' FROM album
                WHERE id = $album_id AND owner = '$login_user')";
        
        execute_sql($link,'album',$sql);

        mysqli_close($link);

        header("location:showAlbum.php?album_id=$album_id");
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>电子相册</title>
    </head>
    <body>
        <p align='center'><img src='Title.png'></p>
        <form action="editPhoto.php" method="post">
            <table align='center'>
                <tr>
                    <td>
                        照片名称
                    </td>
                    <td>
                        <input type="text" name="photo_name" size="31"
                        value="<?php echo $photo_name; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        照片描述
                    </td>
                    <td>
                        <textarea name="photo_comment" rows='5' cols='25'>
                            <?php echo $photo_comment; ?>
                        </textarea>
                        <input type="hidden" name="photo_id" value="<?php echo $photo_id; ?>">
                        <input type="hidden" name='album_id' value="<?php echo $album_id; ?>">
                        <input type="submit" value="更新" <?php if($album_owner != $login_user) echo 'disabled' ?>>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align='center'>
                        <br><a href="showAlbum.php?album_id= <?php echo $album_id ?>">
                        回 "<?php echo $album_name ?>"相册</a>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>