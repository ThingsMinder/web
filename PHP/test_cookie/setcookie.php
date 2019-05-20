<?php 
    //setcookie('user','Felix',time()+3600);
    //setcookie('user','',time()-3600);
?>

<html>
    <body>

        Welcome <?php echo $_POST['name']; ?>!<br>
        You are <?php echo $_POST['age']; ?> years old.<br>
        <?php
        /*
            if(isset($_COOKIE['user'])){
                echo "Welcome ".$_COOKIE['user'].'!<br>';
            }else{
                echo "Welcome guest!<br>";
            }
        */  
        ?>

        Welcome <?php echo $_POST['newname']; ?> !<br>
        You are <?php echo $_POST['newage']; ?> years old!<br>
    </body>
</html>