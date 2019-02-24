<!DOCTYPE html>
<html>
    <body>
        
        <div class="menu">
            <?php
                include 'menu.php';
                echo "I have a ".$color.' '.$car."。"."<br>";
            ?>
        </div>
        <h1>My Page</h1>
        <p>one section</P>
        <p>two section</p>
        <?php 
            include 'foot.php';
            #echo "Copyright @2010-".date('Y')."<br>";
        ?>
        
        <?php
            /*echo readfile('web.txt').'<br>';
            $myfile = fopen('web.txt','r') or die('Unable to open file!');
            while(!feof($myfile)){
                echo fgets($myfile).'<br>';
            }
            fclose($myfile);
            */

            $myfile1 = fopen('newfile.txt','w') or die('Unable to open file!');
            $txt = "Bill Gates\n";
            fwrite($myfile1,$txt);
            $txt = "Steve Jobs\n";
            fwrite($myfile1,$txt);
            fclose($myfile1);

            $myfile2 = fopen('newfile.txt','w')or die('Unable to open file!');
            $txt1 = "Mickey Mouse\n";
            fwrite($myfile2,$txt1);
            $txt1 = "Minnie Mouse\n";
            fwrite($myfile2,$txt1);
            fclose($myfile2);


        ?>
    </body>
</html>