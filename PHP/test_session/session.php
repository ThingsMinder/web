<?php
    session_start();

    //$_SESSION['views']=1;

    if(isset($_SESSION['views'])){
        $_SESSION['views'] = $_SESSION['views'] + 1;
    }else{
        $_SESSION['views'] = 1;
    }
?>

<html>
    <body>
        <?php
            echo "Pageviews = ".$_SESSION['views'].'<br>';
            //session_destroy();
        ?>


        <?php
            //unset($_SESSION['views']);

        ?>

    </body>
</html>
