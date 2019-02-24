<?php
    setcookie('user','Felix',time()+3600);
?>

<html>
    <body>
        <?php
            echo $_COOKIE['user']."<br>>";
            print_r($_COOKIE);
            echo '<br>';

            if(isset($_COOKIE['user'])){
                echo "Welcome ".$_COOKIE['user']."!<br>";
            }else{
                echo "Welcome guest!"."<br>";
            }
        ?>

        Welcome
        <?php 
            echo " ".$_POST['name'].'<br>';
        ?>
        
        You are
        <?php 
            echo ' '.$_POST['age']." years old!".'<br>';
        ?>
    
    </body>
</html>