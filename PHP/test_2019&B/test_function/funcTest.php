<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>My First Page</title>
    </head>
    <body>
        <?php

            /*
            function swap(&$n1,&$n2){
                $temp = $n1;
                $n1 = $n2;
                $n2 = $temp;
                echo '$n1的值是： '.$n1."<br>";
                echo '$n2的值是： '.$n2.'<br>';
                //return $n1,$n2;
            }
            $num1 = 1;
            $num2 = 100;
            swap($num1,$num2);
            echo '$num1的值是： '.$num1.'<br>';
            echo '$num2的值是： '.$num2.'<br>';
            */

            /*
            function tour(...$cities){
                foreach($cities as $value){
                    echo $value.'<br>';
                }
            }

            tour('上海','北京','广州');
            */

            /*
            function sumOfInts(int...$ints){
                return array_sum($ints);
            }

            var_dump(sumOfInts('1abc','2.5bc',3,4,5));
            */

            function compareNum($n1,$n2){
                if($n1<$n2){
                    echo $n1.'与'.$n2.'当中较大的是： '.$n2.'<br>';
                }else if($n1 == $n2){
                    echo $n1.'与'.$n2.'一样大'.'<br>';
                }else{
                    echo $n1.'与'.$n2.'当中较大的是： '.$n1.'<br>';
                }
            }

            compareNum(-5,-3);




        ?>
    </body>
</html>