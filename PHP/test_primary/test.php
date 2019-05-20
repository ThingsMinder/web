<!DOCTYPE html>
<html>
<body>
<h1>My Page</h1>

<!--
<form method='post' action='<?php echo $_SERVER['PHP_SELF'] ?>'>
Name:<input type='text' name='fname'>
<input type='submit'>
</form>
-->

<a href="/PHP/test.php?subject=PHP&web=www.in-et.com">test</a>

<?php
/*
$name = $_POST['fname'];
echo $name;
*/

echo"在".$_GET['web']."学习".$_GET['subject'];

/*
echo "Hello World!<br>";

class Car{
    var $color;
    function Car($color="green"){
        $this->color = $color;
    }
    function what_color(){
        return $this->color;
    }
}

function print_vars($obj){
    foreach(get_object_vars($obj) as $prop => $val){
        echo "\t$prop = $val\n";
    }
}

$herbie = new Car("white");

echo "\herbie: Properties\n";
print_vars($herbie);


$con = mysql_connect("localhost","root","11111111");
if(!$con){
    die('Could not connect:'.mysql_error());
}
*/

/*
$x=5;
$y=6;
$z=$x+$y;
$zz="$x+$y=";
echo $zz;
echo $z;
*/

/*
//$x=5;
//$y=10;
function myTest(){
    static $x;
    static $y;
    static $z;
    echo "<P>在函数内部测试变量</p>";
    echo "变量 x 是：$x <br>";
    echo "变量 y 是：$y <br>";
    echo "变量 z 是：$z <br>";

    //$GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
    //$GLOBALS['x']++;
    $x++;
    $y++;
    $z++;    
}
myTest();
myTest();
myTest();
myTest();

echo"<p>在函数外测试变量：</p>";
echo"A    "," B     ","C    ","D <br>";
echo "变量 x 是：$x <br>";
echo "变量 y 是：$y";
*/

/*
$x=5985;
var_dump($x);
echo"<br>";
$x=-345;
var_dump($x);
echo"<br>";
$x=0x8c;
var_dump($x);
echo("<br>");
$x=046;
var_dump($x);
echo"<br>";

$x=1.35;
var_dump($x);
echo"<br>";

$x=2e3;
var_dump($x);
echo"<br>";

$x=2.5e3;
var_dump($x);
echo"<br>";

$x=8e-5;
var_dump($x);
echo"<br>";

$cars=array("VOLVO","BMW","SAAB");
var_dump($cars);
echo'<br>';

echo strlen('Hello,World!');
echo'<br>';

echo str_word_count("Hello W orld!");
echo"<br>";

echo str_replace("World","Kitty","Hello,World!");
*/


/*
define("greeting",'Hello ljj!',true);
echo greeting;
echo"<br>";

echo Greeting,"<br>";

function myTest1(){
    echo greeting;
}
myTest1();
*/

/*
$a = "Hello, ";

function myTest2($obj){
    global$a,$c;
    $b = $a."$obj".", ".$c;
    echo $b,"<br>";
}
$c = "I love you!";
myTest2("LJJ");
myTest2("QJE");
myTest2("LYS");
myTest2("LMF");


echo"<br>"."<br>"."<br>";
*/

/*

$t = date("H");
if($t<"10"){
    echo "Have a good morning!";
}elseif($t<"20"){
    echo "Hvae a good day!";
}else{
    echo "Have a good night!";
}

echo "<br>"."<br>";

$favfruit = "orange";

switch($favfruit){
    case "apple":
        echo"Your favorite fruit is apple!";
        break;
    case "orange":
        echo"Your favorite fruit is orange!";
        break;
    case "banana":
        echo"Your favorite fruit is banana!";
        break;
    default:
        echo"Your favorite fruit is especially!";
}
*/

/*
$x=1;

while($x<1){
    echo "这个数字是：",$x,"<br>";
    $x++;
}

do{
    echo"这个数字是：",$x,"<br>";
    $x++;
}while($x<0);

for($x=0; $x<=10; $x++){
    echo"No. is:$x <br>";
}

$colors = array("Blue",'red','yellow','green');

foreach($colors as $value){
    echo"$value <br>";
}

$age=array("Bill"=>"63","steve"=>"56","Elon"=>"47");
sort($age);
echo"Elon is ".$age['Elon']." years old!"."<br>";
foreach($age as $x=>$x_value){
    echo"Key=".$x.",Value=".$x_value."<br>";  
}

echo $_SERVER['PHP_SELF'],"<br>";
echo $_SERVER['SERVER_NAME'],'<br>';
echo $_SERVER['HTTP_HOST'],'<br>';
echo $_SERVER['HTTP_REFERER'],"<br>";
echo $_SERVER['HTTP_USER_AGENT'],'<br>';
echo $_SERVER['SCRIPT_NAME'];
*/












?>


</body>
</html>