<?php
    require_once('dbtools.inc.php');
    header('Content-type:text/html;charset=utf-8');

    $name = $_POST['name'];
    $introduction = $_POST['introduction'];

    $link = create_connection();
    $sql = "SELECT * FROM candidate WHERE name = '$name'";

    $result = execute_sql($link,'vote',$sql);

    if(mysqli_num_rows($result) == 0){
        mysqli_free_result($result);

        $sql = "INSERT INTO candidate (name,introduction,score) VALUES ('$name','$introduction',0)";
        $result = execute_sql($link,'vote',$sql);

        header('location:index.php');

    }else{
        echo "<p align='center'>您推荐的候选人已经在候选人名单，不需要再推荐。</p>";
        echo "<p align='center'><a href='javascript:history.back()'>回上一页</a>";
        echo "  <a href='index.php'>回首页</a></p>";
    }

?>