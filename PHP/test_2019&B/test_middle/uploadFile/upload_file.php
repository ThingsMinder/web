<?php
    if((($_FILES['file']['type'] == 'image/gif')
    || ($_FILES['file']['type'] == 'image/jpg')
    || ($_FILES['file']['type'] == 'text/plain'))
    && ($_FILES['file']['size']<20000)){
        if($_FILES['file']['error']>0){
            echo "error:".$_FILES['file']['error'].'<br>';
        }else{
            echo "Upload:".$_FILES['file']['name'].'<br>';
            echo "Type:".$_FILES['file']['type'].'<br>';
            echo "Size:".$_FILES['file']['size']."<br>";
            echo "Stored in:".$_FILES['file']['tmp_name'].'<br>';
        }
    }else{
        echo "Invalid file";
    }
?>