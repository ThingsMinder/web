<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TEST</title>
    </head>
    <body>
        <p align='center'><img src="title.jpg"></p>
        <?php
            $upload_dir = '/Users/thingsmind/mygit/PHP/test_exam/';
            for($i=0;$i<=3;$i++){
                if($_FILES["myfile"]['name'][$i]!=''){
                    $upload_file = $upload_dir.iconv("utf-8","Big5",$_FILES["myfile"]['name'][$i]);
                    move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$upload_file);


                    echo "文件名： ".$_FILES["myfile"]["name"][$i].'<br>';
                    echo "暂存文件名： ".$_FILES['myfile']['tmp_name'][$i].'<br>';
                    echo "文件大小： ".$_FILES['myfile']['size'][$i].'<br>';
                    echo "文件类型： ".$_FILES['myfile']['type'][$i].'<br>';
                    echo "<hr>";
                }
            }

        ?>
    </body>
</html>