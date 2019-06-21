<?php
    $passed = $_COOKIE['passed'];

    if($passed != 'TRUE'){
        header('location:index.html');
        exit();
    }else{
        require_once('dbtools.inc.php');

        $id = $_COOKIE['id'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $year = $_POST['year'];
        $month = $_POST['month'];
        $day = $_POST['day'];
        $telephone = $_POST['telephpne'];
        $cellphone = $_POST['cellphone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $url = $_POST['url'];
        $comment = $_POST['comment'];

        $link = create_connection();
        $sql = "UPDATE users SET password='$password',name='$name',
                                 sex='$sex',year='$year',month='$month',
                                day='$day',telephone='$telephone',cellphone='$cellphone',
                                address='$address',email='$email',url='$url',
                                comment='$comment' WHERE id=$id";
        $result = execute_sql($link,'member',$sql);
        mysqli_close($link);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>修改会员资料成功</title>
    </head>
    <body>
        <center>
            <img src="revise.jpg"><br><br>
            <?php echo $name; ?>
            <p><a href="main.php">回会员专属页面</a></p>
        </center>
    </body>
</html>