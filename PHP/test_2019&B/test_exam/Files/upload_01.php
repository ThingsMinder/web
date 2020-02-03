<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>测试后台</title>
    </head>
    <body>
        <p align='center'><img src="title.jpg"></p>
        <?php
            $upload_dir = "/Users/thingsmind/mygit/PHP/test_exam/";
            $upload_file = $upload_dir.iconv("utf-8","Big5",$_FILES["myfile"]["name"]);
            if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$upload_file)){
                echo "<strong>文件上传成功</strong><hr>";

                echo "文件名： ".$_FILES["myfile"]["name"].'<br>';
                echo "暂存文件名： ".$_FILES["myfile"]["tmp_name"].'<br>';
                echo "文件大小： ".$_FILES["myfile"]["size"].'<br>';
                echo "文件类型： ".$_FILES["myfile"]["type"].'<br>';
                echo "<p><a href='javascript:history.back()'>继续上传</a></p>";
            }else{
                echo "文件上传失败(".$_FILES["myfile"]["error"].")<br><br>";
                echo "<p><a href='javascript:history.back()'>重新上传</a></p>";
            }
        ?>
    </body>
</html>