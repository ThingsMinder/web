<?php
    if(isset($_REQUEST['email'])){
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
        mail("someone@example.com","Subject:$subject",$message,"From:$email");
        echo "Thank you for using our mail form";
    }else{
        echo"<form method='post' action='email.php'>
        Email:<input name='email' type='text'>
        <br>
        Subject:<input name='subject' type='text'>
        <br>
        Message:<br>
        <textarea name='message' rows='15' cols='40'></textarea>
        <br>
        <input type='submit'>
        </form>";
    }
?>