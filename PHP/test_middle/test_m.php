<!DOCTYPE HTML>
<html>
    <body>
        <?php
            $cars = array
            (
                array('VOLVO',33,20),
                array('BMW',17,15),
                array('SAAB',5,2),
                array('LAND ROVER',15,11),
            );

            for($row=0;$row<4;$row++){
                echo "<p><b>行数 $row</b></p>";
                echo "<ul>";
                for($col=0;$col<3;$col++){
                    echo "<li>".$cars[$row][$col].'</li>';
                }
                echo "</ul>";
            }

            echo "今天是： ".date('Y/m/d').'<br>';
            echo "今天是： ".date('Y.m.d').'<br>';
            echo "今天是： ".date('Y-m-d')."<br>";
            echo "今天是： ".date('l').'<br>';
        ?>

        Copyright 2008-<?php echo date('Y').'<br>';?>
        
        <?php
        date_default_timezone_get('Asia/Beijing');
        echo "Now time is: ".date('h:i:s').date('a')."<br>";

        $d = strtotime('10:38pm April 15 2018');
        echo "make time is: ".date('Y-m-d h:i:sa',$d).'<br>';
        
        $d = strtotime('tomorrow');
        echo date('Y-m-d h:i:sa' ,$d).'<br>';

        $d = strtotime('+3 months');
        echo date('Y-m-d h:i:sa',$d)."<br>";

        $startdate=strtotime('Saturday');
        $enddate=strtotime('+10 weeks',$startdate);
        while($startdate<$enddate){
            echo date('M d',$startdate).'<br>';
            echo date('M d',$enddate).'<br>'.'<br>';
            $startdate = strtotime('+1 week',$startdate);
        }

        $d1 = strtotime('December 31');
        $d2 = ceil(($d1-time())/60/60/24);
        echo "距离12月31日还有： ".$d2.' 天'."<br>";

        ?>
    
    </body>
</html>