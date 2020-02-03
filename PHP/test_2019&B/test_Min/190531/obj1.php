<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Obj Page</title>
    </head>
    <body>
        <?php
            class Students{
                public $Name;
                function __construct($Str)
                {
                    $this->Name = $Str;
                    echo "已经成功创建名为"."'$this->Name'"."的对象！！";
                }
                function __destruct()
                {
                    $this->Name = NULL;
                    //echo "名为".$this->Name."的对象已经释放！";
                    echo "对象已经释放！";
                }
            }

            $Obj = new Students('Felix');
            //$Obj->__destruct();



        ?>
    </body>
</html>