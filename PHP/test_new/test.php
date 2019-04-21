<!DOCTYPE html>
<html>
    <body>
        <h1>My first page</h1>

        <!--
        <form method="post" action="">
            Name:<input type="text" name="fname">
            <input type="submit">
        </form>
        -->

        <a href="test1.php?subject=You&Who=I">AA</a>



        <?php 
            //echo $_GET['Who']." Love ".$_GET['subject'].'!';




            /*
            echo "Hello World!"."\n".'<br>';
            $x = 5;
            $y = 6;
            $z = $x + $y;
            echo $z;
            */

            /*
            $x = 5;

            function myTest(){
                global $y,$x;
                $y = 10;
                echo "<p>Test inside:</p>";
                echo "Variable x is: $x";
                echo "<br>";
                echo "Virable y is: $y";
            }

            myTest();
            echo "<p>Test outside:</p>";
            echo "<br>";
            echo "Variable y is: $y";
            */

            //$x = 5;

            /*
            $y = 6;

            function myTest1(){
                static $x = 0;
                $GLOBALS['y'] = $x + $GLOBALS['y'];
                $x++;
                echo "x = ".$x.", ";
            }
            */
            
            /*
            myTest1();
            echo $x.'<br>';
            echo $y.'<br>';
            myTest1();
            echo$y.'<br>';
            myTest1();
            echo$y.'<br>';            
            myTest1();
            echo$y.'<br>';
            */

            /*

            function myTest($z){
                for($i=1;$i<=$z;$i++){
                    //echo"y = ".$GLOBALS['y']."<br>";
                    myTest1();
                    echo "y = ".$GLOBALS['y']."<br>";
                }
            }

            myTest(15);

            */
            //echo$y;

            /*
            $x = 5985;
            var_dump($x);
            echo"<br>";

            $x = -345;
            var_dump($x);
            echo"<br>";

            $x = 0x8c;
            var_dump($x);
            echo"<br>";

            $x = "xxxxx";
            var_dump($x);
            echo strlen($x);
            echo"<br>";

            $x = array("a",'b','c');
            var_dump($x);
            echo"<br>";
            */

            /*
            define("A",' i love you <br>',true);
            echo A;
            echo a;

            function myTest2($ii){
                for($i=1;$i<=$ii;$i++){
                   echo $i.a; 
                } 
            }

            myTest2(15);

            $x = 10;
            $y = '10';

            var_dump($x == $y);
            */

            /*
            $t = date('H');
            if($t<'10'){
                echo "Have a good morning!";
            }elseif($t<'20'){
                echo "Have a good day!";
            }else{
                echo "Have a good night!";
            }
            */

            /*
            $a = 5;

            function myTest3($z){
                global $a;
                while($a<=$z){
                    echo "This num is: ".$a."<br>";
                    $a++;
                }
                do{
                    echo "This num mybe is: ".$a."<br>";
                    --$a;
                }while($a>0 && $a<20);        
            }

            myTest3(15);
            */

            /*
            $colors = array('red','green','blue','yellow');

            foreach($colors as $value){
                echo "$value <br>";
            }
            */

            /*
            $age = array("bill"=>'35','steve'=>'37','elon'=>'43');

            foreach($age as $x=>$x_value){
                echo $x."'s age is ".$age[$x]." years old!".'<br>';
            }
            
            echo $_SERVER['PHP_SELF'].'<br>';
            echo $_SERVER['SERVER_NAME'].'<br>';
            echo $_SERVER['HTTP_HOST'].'<br>';
            echo $_SERVER['HTTP_REFERER']."<br>";
            echo $_SERVER['HTTP_USER_AGENT']."<br>";
            echo $_SERVER['SCRIPT_NAME'].'<br>';
            */

            /*
            $name = $_REQUEST['fname'];
            $name1 = $_POST['fname'];
            echo $name.'<br>';
            echo $name1.'<br>';
            */

        ?>
        
    
    </body>