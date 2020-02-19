<?php
    require_once('dbtools.inc.php');
    
    $author = $_POST['author'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $current_time = date('Y-m-d H:i:s');
    $reply_id = $_POST['reply_id'];

    $link = create_connection();

    $sql = "INSERT INTO reply_message(author,subject,content,date,reply_id)
            VALUES('$author','$subject','$content','$current_time','$reply_id')";
    $result = execute_sql($link,'news',$sql);

    //mysqli_free_result($result);

    mysqli_close($link);

    header("location:show_news.php?id=".$reply_id);
    
    exit();
    
?>