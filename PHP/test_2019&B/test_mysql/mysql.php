<?php
    $con = new mysqli('localhost','root','11111111','crashcourse');
    //这个连接不行 
    /*  
    $con = mysqli_connect('localhost','root','11111111');
    */
    if(!$con){
        die("连接失败: ".$con->connect_error).'<br>';
    }else{
        echo "连接成功".'<br>';
    }
    //$con->set_charset("utf8");
    $con->query("SET NAMES utf8");

    $result = $con->query("SELECT * FROM products WHERE vend_id = '1001'");
    echo "<table border='1' align='center'><tr align='center'>";
    while($field = $result->field())
        echo "<td>".$field->name.'</td>';
    echo "</tr>";
    while($row=$result->fetch_row()){
        echo "<tr>";
        for($i=0;$i<$result->field_count;$i++)
            echo "<td>".$row[$i]."</td>";
        echo "</tr>";
    } 
    echo "</table>";

    $result->free();
    $con->close();





    /*
    //这是我在2019年5月12日找到的唯一能够创建数据库的函数，折腾了我整整半年多之久。
    mysqli_select_db($con,myDB);

    if (myDB) {
        echo "数据库创建成功".'<br>';
    } else {
        echo "Error creating database: ".$con->error.'<br>';
    }   

    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )";
    
    mysqli_query($con,$sql);

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";

    mysqli_prepare($con,$sql);

    $sql = 'SELECT firstname,lastname FROM MyGuests';
    mysqli_query($con,$sql);
    $result = $con;
    $row = mysqli_fetch_assoc($result);
    if($result){
        echo "BEGIN: ".'<br>';
        echo "firstname: ".$row['firstname'].' - '.'lastname: '.$row['lastname'].'<br>';
    }else{
        echo '无结果';
    }
    $con->close();
    */


?>