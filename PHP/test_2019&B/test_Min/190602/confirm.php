<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>confirm page</title>
    </head>
    <body>
        <?php 
            $name = $_POST['UserName'];
            $email = $_POST['UserMail'];
            switch ($_POST['UserAge']){
                case "Age1":
                    $Age = '未满20岁';
                    break;
                case "Age2":
                    $Age = '20~29';
                    break;
                case "Age3":
                    $Age = '30~39';
                    break;
                case "Age4":
                    $Age = '40~49';
                    break;
                case "Age5":
                    $Age = '50岁以上';
                    break;
            }

            $Phone = $_POST['UserPhone'];
            $Trouble = $_POST['UserTrouble'];
            $Number = $_POST['UserNumber'];

            /*
            echo $name."您好！您输入的数据如下：".'<br>';
            echo $email.'<br>';
            echo $Age.'<br>';
            foreach($Phone as $Value){
                echo $Value.'&nbsp;'.'<br>';
            }
            echo $Trouble.'<br>';; 
            foreach($Number as $Value){
                echo $Value.'&nbsp;'.'<br>';
            }
            */

        ?>
        
        
        <p><i><?php echo $name; ?></i>您好！您输入的数据如下：</p>
        电子邮件：<?php echo $email; ?><br>
        年龄：<?php echo $Age; ?><br>
        曾经使用过的手机品牌：<?php foreach($Phone as $Value) echo $Value.'&nbsp;'; ?><br>
        使用过的手机遇到什么问问题：<?php echo $Trouble; ?><br>
        使用过哪些电信服务商：<?php foreach($Number as $Value) echo $Value.'&nbsp;'; ?><br>
        

    </body>
</html>