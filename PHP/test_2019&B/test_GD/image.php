<?php 
    $im = imagecreate(200,200);

    $background = imagecolorallocate($im,255,255,255);

    $red = imagecolorallocate($im,255,0,0);
    $green = imagecolorallocate($im,0,255,0);

    imageellipse($im,100,100,199,199,$red);
    imageellipse($im,100,100,150,100,$green);


?>