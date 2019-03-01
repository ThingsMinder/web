<?php
    $con = mysql_connect("localhost","root","11111111");
    if(!$con){
        die('Could not connect:'.mysql_error());
    }

    

    if(mysql_query('CREATE DATABASE my_db',$con)){
        echo "Database created";
    }else{
        echo "Error creating database: ".mysql_error();
    }

    mysql_select_db('my_db',$con);
    $sql = "CREATE TABLE Persons(
        personID int NOT NULL AUTO_INCREMENT,
        PRIMARY KEY(personID),
        FirstName varchar(15),
        LastName varchar(15),
        Age int
    )";

    mysql_query($sql,$con);

    mysql_query("INSERT INTO Persons(FirstName,LastName,Age) VALUES('Peter','Griffin','35')");
    mysql_query("INSERT INTO Persons(FirstName,LastName,Age) Values('Glenn','Quagmire','33')");

    
    $result = mysql_query("SELECT * FROM Persons");

    while($row = mysql_fetch_array($result)){
        echo $row['FirstName'].' '.$row['LastName'].'<br>';
    }

    
    mysql_close($con);

    

?>