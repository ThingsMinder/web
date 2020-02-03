<?php
    require_once('dbtools.inc.php');

    header("Content-type:text/html;charset=utf-8");

    $id = strtoupper($_POST['id']);
    $name = $_POST['name'];

    $link = create_connection();
    $sql = "SELECT * FROM id_number WHERE id = '$id'";
    $result = execute_sql($link,'vote',$sql);

    if(mysqli_num_rows($result) != 0){
        mysqli_free_result($result);
        echo "<script type='text/javascript'>";
        echo "alert('您已经参与过本次活动了')";
        echo "history.back()"."</script>";
        exit();
    }else{
        mysqli_free_result($result);

        $sql = "INSERT INTO id_number (id) VALUES ('$id')";
        $result = execute_sql($link,'vote',$sql);

        $sql = "UPDATE candidate SET score = score + 1 WHERE name = '$name'";
        $result = execute_sql($link,'vote',$sql);
        mysqli_close($link);
        header('location:result.php');
    }

?>