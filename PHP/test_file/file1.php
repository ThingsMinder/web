<?php

    /*
    $path = $_SERVER['PHP_SELF'];
    echo basename($path).'<br>';
    echo basename($path,'.php').'<br>';

    echo "网页路径： ".$path.'<br>';
    $path_parts = pathinfo($path);
    echo "分割出来的路径名称是： ". $path_parts['dirname'].'<br>';
    echo "分割出来的文件名是： ".$path_parts['basename'].'<br>';
    echo "分割出来的扩展名是： ".$path_parts['extension'].'<br>';

    echo "绝对路径是： ".realpath(basename($path)).'<br>';
    */


    /*
    mkdir('/Users/thingsmind/mygit/PHP/test_file/pictures/pic',0777);
    chmod('/Users/thingsmind/mygit/PHP/test_file/pictures',0777);
    //getcwd();

    chdir("/Users/thingsmind/mygit/PHP/");
    echo mkdir('pic');

    echo rmdir('/Users/thingsmind/mygit/PHP/pic');
    echo rmdir('/Users/thingsmind/mygit/PHP/test_file/pictures/pic');
    echo rmdir('/Users/thingsmind/mygit/PHP/test_file/pictures');
    echo is_dir('/Users/thingsmind/mygit/PHP/test_file/pictures');
    echo dirname('/Users/thingsmind/mygit/PHP/test_file/pictures/pic').'<br>';
    */

    /*
    $file = scandir('/Users/thingsmind/mygit/PHP/',1);
    foreach($file as $value){
        if($value != "." && $value != ".."){
            echo $value.'<br>';
        } 
    }
    */

    /*
    echo file_exists('/Users/thingsmind/mygit/PHP/test_file/abc.txt');
    echo is_file('/Users/thingsmind/mygit/PHP/test_file/abc.txt');

    echo chdir('/Users/thingsmind/mygit/PHP');
    echo copy('/Users/thingsmind/mygit/PHP/test_file/abc.txt',abc_new.txt);
    echo unlink(abc_new.txt);
    */

    /*
    chdir('/Users/thingsmind/mygit/PHP/test_file/abc.txt');
    $filename = basename($_SERVER['PHP_SELF']);
    echo "当前网页的建立时间:  ".gmdate('Y-m-d H:i:s',filectime($filename)).'<br>';
    echo "当前网页的最后访问时间是： ".gmdate('Y-m-d H:i:s',fileatime($filename)).'<br>';
    echo "当前网页的修改时间是： ".gmdate('Y-m-d H:i:s',filemtime($filename)).'<br>';
    echo "当前网页的大小是： ".filesize($filename).'<br>';
    */


    /*
    $filename = 'abc.txt';
    $handle = fopen($filename,"r");
    if($handle){
        echo '打开文件成功'."<br>";
        $contents = nl2br(fread($handle,filesize($filename)));
        
        fclose($filename);
        echo $contents;
    }else{
        echo '打开文件失败';
    }
    */

    /*
    $contents = '';
    $filename = 'abc.txt';
    $handle = fopen($filename,'a');
    if($handle){
        $contents.="\r\n";
        $contents.="<i>凤凰台上凤凰游，凤去台空江自流</i>\r\n";
        $contents.="<i>吴宫花草埋幽径，晋代衣冠成古邱</i>\r\n";
        $result = fwrite($handle,$contents);
        fclose($handle);
        echo "成功写入".$result."个字节";

    }else{
        echo "打开文件失败";
    }

    $handle_new = fopen($filename,'r');
    $contents_output = nl2br(fread($handle_new,filesize($filename)));
    echo $contents_output;
    fclose($handle_new);

    $contents.="待到重阳日，还来就菊花。";
    $result_new = file_put_contents('abc.txt',$contents);
    echo "成功写入".$result_new."个字节";
    echo nl2br(file_get_contents($filename));
    */

    /*
    $filename = 'sample3.txt';
    $handle = fopen($filename,'r');
    $handle_new = fopen("sample4.txt",'w+');
    
    while(!feof($handle)){
        $contents = fread($handle,1);
        fwrite($handle_new,strtoupper($contents));
        echo strtoupper($contents);
    }
    fclose($handle);
    fclose($handle_new);
    */

    /*
    $file = scandir('/Users/thingsmind/mygit/PHP');
    foreach($file as $value){
        echo $value.'<br>';
    }
    */

    mkdir("/Users/thingsmind/mygit/PHP/test_GD");





?>