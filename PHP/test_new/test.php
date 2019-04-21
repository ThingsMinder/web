<!DOCTYPE html>
<html>
    <body>
        <h1>My first page</h1>
        <?php 
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


        ?>
    </body>