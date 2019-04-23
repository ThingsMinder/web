<?php 
    session_start(); 
    //$_SESSION['views'] = 1;
    if(isset($_SESSION['views'])){
        $_SESSION['views'] ++;
    }else{
        $_SESSION['views'] = 1;
        //echo 'Views = '.$_SESSION['views'];
    }
?>

<html>
    <body>
        <?php
            
            echo 'Pageviews= '.$_SESSION['views'].' !<br>'
        ?>
        <?php
            session_destroy();
        ?>
    </body>
</html>