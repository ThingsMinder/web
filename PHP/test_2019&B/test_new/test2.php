<html>
    <body>
        <?php

            $cars = array(array('品牌','销量','库存'),
                          array('Volvo',22,18),
                          array('BMW',20,12),
                          array('Audi',30,5),
                          array('Benz',35,15));
            for($row=0;$row<count($cars);$row++){
                
                for($col=0;$col<count($cars);$col++){
                    //echo '<li>';
                    echo '<li>'.$cars[$row][$col].'</li>'; 
                    //echo '</li>';
                }
                
                echo "<br>";
            }



        ?>

        版权所有 2008-<?php echo date('Y'); ?>
    </body>
</html>