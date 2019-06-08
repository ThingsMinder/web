<?php
    if(detect_mobile()){
        $url = 'mobile.php';
    }else{
        $url = 'pc.php';
    }
    header("Location:$url");
    exit();

    function detect_mobile(){
        $mobile_list = "/ (alcate|amoi|mini|mobi|wireless|xda|zte|opera\s *mobi|opera\*mini|320*320|240*320|176*220) /i";
        return preg_match($mobile_list,strtolower($_SERVER['HTTP_USER_AGENT']));
    }


?>