<?php
    //echo readfile('abc.txt');
    
    //$myfile = fopen('abc.txt','r')or die('Unable to open file!');
    //echo fread($myfile,filesize('abc.txt'));
    /*
    echo fgets($myfile)."<br>";
    echo fgets($myfile)."<br>";
    echo fgets($myfile)."<br>";
    echo fgets($myfile)."<br>";
    echo fgets($myfile)."<br>";
    */

    /*
    while(!feof($myfile)){
        echo fgets($myfile).'<br>';
        echo fgetc($myfile).'<br>';
    }
    */
    
    /*
    while(!feof($myfile)){
        echo fgetc($myfile);
    }
    */
    //fclose($myfile);


    $myfile = fopen('abc.txt','w')or die('Unable to open file!');
    $txt = "Bill Gates\n";
    fwrite($myfile,$txt);

    $txt = "Steve Jobs\n";
    fwrite($myfile,$txt);


    fclose($myfile);

    $myfile1 = fopen('abc.txt','wr')or die('Unable to open file!');
    $txt = "AA\n";
    fwrite($myfile1,$txt);
    fclose($myfile1);
    
    $myfile2 = fopen('abc.txt','r')or die('Unable to open file!');
    while(!feof($myfile2)){
        echo fgets($myfile2).'<br>';
    }
    fclose($myfile2);    
    

?>