<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>测试后台</title>
    </head>
    <body>
        <?php
            $Name = $_POST['UserName'];
            $Email = $_POST['UserMail'];
            $Cache = $_POST['UserCache'];
            $Month = $_POST['UserMonth'];
            $Rate = $_POST['UserRate'];
            $Total = $Cache + $Cache * $Rate * $Month / 12;
        ?>
        <p><i><b><?php echo $Name; ?></b></i>，您好！</p>
        <p>您的邮箱是：<i><b><?php echo $Email; ?></b></i></p>
        当：<br>
        本金为：<?php echo $Cache."<br>"; ?>
        年利率是：<?php echo $Rate.'<br>'; ?>
        存款月数是：<?php echo $Month.'<br>'; ?>
        本利和将为：<?php echo $Total; ?>

        <p><a href="bank.html">回上页</a></p>
    </body>
</html>