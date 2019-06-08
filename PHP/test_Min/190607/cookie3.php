<?php
    header("Content-type=text/html;charset=utf-8");
    setcookie('words[0]','KD');
    setcookie('words[1]','cl');
    setcookie('words[2]','hhw');
    if(isset($_COOKIE['words'])){
        foreach($_COOKIE['words'] as $key=>$value){
            echo $key.':'.$value.'<br>';
        }
    }

    session_start();
    echo "session_id: ".session_id().'<br>';
    if(!isset($_SESSION['count'])){
        $_SESSION['count'] = 1;
    }else{
        $_SESSION['count']++;
    }

    echo "这是您第 ".$_SESSION['count'].'次访问本网页！';


?>