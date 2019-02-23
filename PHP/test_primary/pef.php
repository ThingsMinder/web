<!DOCTYPE HTML>
<html>
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
    </head>
    <body>
         <?php
            $nameErr = $emailErr = $websiteErr = $genderErr = '';
            $name = $email = $comment = $website = $gender = '';

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(empty($_POST['name'])){
                    $nameErr = "必填项";
                }else{
                    $name = test_input($_POST['name']);
                    if(!preg_match("/^[a-zA-Z]*$/",$name)){
                        $nameErr = '只允许字母和空格';
                    }
                }

                if(empty($_POST['email'])){
                    $emailErr = "必填项";
                }else{
                    $email = test_input($_POST['email']);
                    if(!preg_match('/([\w\-]+@[\w\-]+\.[\w\-]+)/',$email)){
                        $emailErr = '无效的格式';
                    }
                }

                if(empty($_POST['website'])){
                    $website = "";
                }else{
                    $website = test_input($_POST['website']);
                    if(!preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i',$website)){
                        $websiteErr = '无效的URL';
                    }
                }

                if(empty($_POST['comment'])){
                    $comment = '';
                }else{
                    $comment = test_input($_POST['comment']);
                }

                if(empty($_POST['gender'])){
                    $genderErr = '必选项';
                }else{
                    $gender = test_input($_POST['gender']);
                }
            }

            function test_input($data){
                $data = trim($data);
                $data = stripcslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

        ?>



        <form method="POST" action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>'>
            姓名：<input type="text" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr; ?></span>
            <br><br>
            电邮：<input type="text" name="email" value="<?php echo $email; ?>">
            <span class="error">*<?php echo $emailErr; ?></span>
            <br><br>
            网址：<input type="text" name="website" value="<?php echo $website; ?>">
            <span class="error"><?php echo $websiteErr; ?></span>
            <br><br>
            评论：<textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
            <br><br>
            性别：
            <input type="radio" name="gender" value="male" 
            <?php if(isset($gender) && $gender == 'male') echo"checked"; ?>>男生
            <input type="radio" name="gender" value="female"
            <?php if(isset($gender) && $gender == 'female') echo"checked"; ?>>女生
            <span class="error">* <?php echo $genderErr; ?></span>
            <br><br>
            <input type="submit" name="submit">
        </form>

        <?php

            echo "<h2>您的输入是：</h2>".'<br>';
            echo $name.'<br>';
            echo $email.'<br>';
            echo $website.'<br>';
            echo $comment.'<br>';
            echo $gender."<br>";


        ?>
  

    </body>
</html>