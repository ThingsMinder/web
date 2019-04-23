<?php 
    $to = 'someone@example.com';
    $subject = 'Test mail';
    $message = 'Hello! This is a test message!';
    $from = 'someoneelse@example.com';
    $headers = 'From:$from';
    mail($to,$subject,$message,$headers);
    echo 'Mail sent.';
?>