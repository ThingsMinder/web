<?php
    echo "<i><b><h1 align='center'>Hello</h1></b></i>";
    echo PHP_INT_MAX."<br>".PHP_INT_MIN."<br>".PHP_INT_SIZE."<br>";
    echo "I Love You"."<br>";
    //echo PHP_FLOAT_MAX;
    
    $var = TRUE;
    strval($var);
    echo $var.'<br>';

    define('PI',3.14);
    define('X',10*5);
    echo PI.'<br>';
    echo X.'<br>';

    echo __FILE__;
    echo '<br>';
    echo __DIR__;
    echo '<br>';

    $a = -5; 
    echo --$a.'<br>';
    echo $a++.'<br>';
    echo $a.'<br>';
    
    echo 7 .'PHP'."<br>";
    
    echo (8<10 ? "I Love you" : 10-2).'<br>';
    echo 8 .'<br>';

    $a = `DIR`;
    echo "<pre>$a</pre>";

    //$a = 1.1;
    //$b = TRUE;
    $c = 'str';
    var_dump($a,'<br>',$b,'<br>',$c);
    echo '<br>';
    var_dump($a,$b,$c);
    echo "<br>";

    echo 0xFFF-0xFAB;
    echo "<br>";
    echo 2/3.0;
    echo "<br>";
    echo (int)2/3.0;
    echo "<br>";
    echo (int)(2/3.0);
    echo "<br>";
    echo (int)(TRUE+TRUE);
    echo "<br>";
    echo 12.3*10%5;
    echo "<br>";
    echo 'a'>'Z'; 
    echo "<br>";
    echo ~0x0005; 
    echo "<br>";
    echo 50>30^70>100; 
    echo "<br>";
    echo 3|5;
    echo "<br>";
    echo 128<<3;
    echo "<br>";
    echo -4096>>5;
    echo "<br>";

    $z = 10.5;
    var_dump($z);
    echo "<br>";

    echo (int)is_bool(1.0);
    echo "<br>";
    echo (int)is_scalar('abc');
    echo "<br>";
    echo (float)'10.5abc';
    echo "<br>";
    echo intval(FALSE);
    echo "<br>";
    echo (int)(('aBC'<'ABC')^('abc'!='ABC'));
    echo "<br>";
    echo (3<=>5);
    echo "<br>";
    echo $a??$b??'Hello!';
    echo "<br>";   

    $city = array('Japan'=>'东京','China'=>'上海','USA'=>'纽约');
    foreach($city as $key=>$value){
        echo $key."的著名城市是： ".$value."<br>";
    }

    $city = array('shanghai','Tokyo','NewYork');
    foreach($city as $value){
        echo $value."<br>";
    }

    $Scores = array('s1'=>85,'s2'=>60,'s3'=>54,'s4'=>91,'s5'=>100,'s6'=>77);
    $MaxValue = 0;
    $MaxValue_key = '';
    $MinValue = 100;
    foreach($Scores as $key=>$value){
        if($Scores[$key]>$MaxValue){
            $MaxValue = $Scores[$key];
            $MaxValue_key = $key;    
        }
    }
    foreach($Scores as $key=>$value){
        if($Scores[$key]<$MinValue){
            $MinValue = $Scores[$key];
            $MinValue_key = $key;
        }
    }
    echo "分数最高的同学是： ".$MaxValue_key.', 分数是：'.$MaxValue.'<br>';
    //echo '最高分数是：'.$MaxValue.'<br>';
    //echo '最低分数是： '.$MinValue.'<br>';
    echo "分数最低的同学是： ".$MinValue_key.', 分数是： '.$MinValue."<br>";




    $Scores = array(array(5,7.7,8,9),
                    array(8.8,5.8,8,5),
                    array(6,9,8.1),
                    array(7.6,8.5,9.5),
                    array(9,9,9.2),
                    array(4,6.3,7.9),
                    array(8.2,7,9.6),
                    array(9.1,8.5,8.9));
    echo count($Scores).'<br>';
    //$avg = array();
    $sum = 0;
    
    for($i=0;$i<count($Scores);$i++){
        for($j=0;$j<count($Scores[$i]);$j++){
            $sum += $Scores[$i][$j];            
        }
        echo '第'.($i+1).'个同学的总成绩是：'.$sum.'<br>';
        echo '第'.($i+1).'个同学的平均成绩是：'.$sum/sizeof($Scores[$i]).'<br>';
    }


    $Month = array('一月'=>'Jan.','二月'=>'Feb.','三月'=>'Mar.',
                   '四月'=>'Apr.','五月'=>'May.','六月'=>'Jun.',
                   '七月'=>'Jul.','八月'=>'Aug.','九月'=>'Sep.',
                   '十月'=>'Oct.','十一月'=>'Nov.','十二月'=>'Dec.');
    
    foreach($Month as $key=>$value){
        echo $key.'的英文简写是：'.$value."<br>";
    }

    $my_array = array("1",2,3);
    array_push($my_array,'4');
    list($A,$B,$C,$D) = $my_array;
    echo $A.'<br>';
    echo $B.'<br>';
    echo $C."<br>";
    echo $D;

?>