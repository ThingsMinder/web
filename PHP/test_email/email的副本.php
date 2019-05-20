<html>
    <body>
        <?php 
        /*
            $to = 'someone@example.com';
            $subject = 'Test mail';
            $message = 'Hello! This is a test message!';
            $from = 'someoneelse@example.com';
            $headers = 'From:$from';
            mail($to,$subject,$message,$headers);
            echo 'Mail sent.';
        */

        /*
        if(isset($_REQUEST['email'])){
            $email = $_REQUEST['email'];
            $message = $_REQUEST['message'];
            //$headers = $_REQUEST['headers'];
            $subject = $_REQUEST['subject'];
            mail('someone@example.com',"Subject:$subject",
            $message,"From:$email");
            echo "Thank you for your using our mail form";
        }else{
            echo "<form method='POST' actioon = 'mailform.php'>
                  Email:<input type='text' name='email'>
                  Subject:<input type='text' name='subject'>
                  Message:<br>
                  <textarea name='message' rows='15' cols='40'>
                  </textarea><br>
                  <input type='submit'>
                  </form>";
        }
        */

        function spamcheck($field){
            $field = filter_var($field,FILTER_SANITIZE_EMAIL);

            if(filter_var($field,FILTER_SANITIZE_EMAIL)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        if(isset($_REQUEST['email'])){
            $mailcheck = spamcheck($_REQUEST['email']);
            if(mailcheck==FALSE){
                echo 'Invalid input';
            }else{
                $email = $_REQUEST['email'];
                $subject = $_REQUEST['subject'];
                $message = $_REQUEST['message'];
                mail("someone@example.com","Subject:$subject",
                      $message,"From:$email");
                echo "Thank you for using our email from";
            }
        }else{
            echo "<form action='mailfrom.php method='post'>
            Email:<input name='email' type='text'><br>
            Subject:<input name='subject' type='text'><br>
            Message:<br>
            <textarea name='message' rows='15' cols='40'>
            </textarea><br>
            <input type='submit'>
            </form>";
        }

        ?>
    </body>
</html> 