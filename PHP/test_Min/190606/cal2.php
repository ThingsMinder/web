<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>total</title>
    </head>
    <body>
        <?php
            if(!isset($_POST['Send'])){
                ?>
                <form method="POST" action="cal2.php">
                    <input type="hidden" name="Send" value="TRUE">
                    <fieldset>
                    <legend>个人资料</legend>
                    请输入姓名&nbsp;&nbsp;：<input type="text" name="UserName" size="30"><br>
                    请输入E-mail：<input type="text" name="UserMail" size="30"><br>
                    </fieldset>
                    <fieldset>
                    <legend>计算存款本利和</legend>
                    请输入本金（例如500000）：<input type="text" name="UserCache" size="20"><br>
                    请输入年利率（例如&nbsp;0.05）：<input type="text" name="UserRate" size="20"><br>
                    请输入月数（例如&nbsp;11）&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;：<input type="text" name="UserMonth" size="20"><br>
                    </fieldset>
                    <input type="submit" name="开始计算">
                    <input type="reset" name="重新输入">
                </form>
                <?php
            }else{
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
            <?php
            }
        ?>
    </body>
</html>