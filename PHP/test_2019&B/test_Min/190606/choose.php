<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HTTP</title>
    </head>
    <body>
        <?php
            //header('WWW-Authenticate:Negotiate');
            //header('WWW-Authenticate:NTLM',FALSE);
            $url = $_POST['mySelect'];
            header("Location:$url");
            exit();
        ?>
    </body>
</html>