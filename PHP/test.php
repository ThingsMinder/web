<!DOCTYPE html>
<html>
<body>
<h1>My Page</h1>

<?php
echo "Hello World!\n";

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


?>


</body>
</html>