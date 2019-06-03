<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>对象测试</title>
    </head>
    <body>
        <?php

            /*
            class Employee{
                public $Name;
                function ShowName(){
                    echo '这名员工的姓名是： '.$this->Name.'<br>';
                }
            }

            class MyMath{
                
                public static function cubic($x){
                    return $x.'的3次方是： '.($x * $x * $x);
                }
                

                const PI = 3.14;
                //public $Radius;
                public static function ShowArea($Radius){
                    echo '半径为'.$Radius.'的圆 面积为： '.($Radius * $Radius * self::PI);
                    //echo '圆的面积为： '.($this->Radius * $this->Radius * self::PI);
                }
            }
            
            
            $Obj = new Employee();
            $Obj->Name = 'Felix';
            $Obj->ShowName();
            

            
            echo MyMath::cubic(5).'<br>';
            echo MyMath::cubic(10).'<br>';
            

            echo '圆周率为： '.MyMath::PI.'<br>';
            echo MyMath::ShowArea(10).'<br>';
            
            
            $Obj = new MyMath();
            $Obj->Radius = 10;
            $Obj->ShowArea();
            */

            /*
            class Employee{
                public $Name;
                function __construct($Str){
                    $this->Name = $Str;
                    echo '已经创建名字为：'.($this->Name).' 的对象！';
                }
                function __destruct(){
                    $this->Name = NULL;
                    echo "这个对象已经被释放!!";
                }
            }

            $Obj = new Employee('小红');
            echo '<br>';
            $Obj = NULL;
            //$Obj->__destruct();
            echo $Obj->Name."<>";
            */

            /*
            class Employee{
                public $Name;
                function __construct($Str)
                {
                    $this->Name = $Str;
                    echo '名为：'."'$this->Name'".'的对象已经建立！！'."<br>";
                }
                function __destruct()
                {
                    $this->Name = NULL;
                    echo '对象释放成功'.'<br>';
                }
            };

            $Obj1 = new Employee('xiaohong');
            $Obj2 = new Employee('xiaohong');
            $Obj3 = $Obj1;

            echo ($Obj1 == $Obj2).'aaa'.'<br>';
            echo ($Obj1 === $Obj2).'bbb'.'<br>';
            echo ($Obj1 === $Obj3).'ccc'.'<br>';

            $NewObj = new class('xiaowang'){
                public $Name;
                function __construct($Str)
                {
                    $this->Name = $Str;
                    echo '名为：'."'$this->Name'".'的对象创建成功！'.'<br>';
                }
            };
            */


            class Payroll{  
                
                public $Name;
                function __construct($Str)
                {
                   $this->Name = $Str; 
                }
                
                function __destruct()
                {
                    $this->Name = NULL;
                    echo "对象释放成功！";
                }
                

                public function Payment($Hours,$PayRate){
                    return $Hours * $PayRate;
                }
            }

            
            class BonusPayroll extends Payroll{
                public $Name1;
                function __construct($Str1)
                {
                   $this->Name1 = $Str1; 
                }
                
                function __destruct()
                {
                    $this->Name1 = NULL;
                    echo "对象释放成功！".'<br>';
                }

                public function Payment($Hours,$PayRate)
                {
                    echo $this->Name1.'的未含奖金薪资是：'.(Payroll::Payment($Hours,$PayRate)).'<br>';

                    return Payroll::Payment($Hours,$PayRate) + 5000;
                }
            }
            
            $BpObj = new BonusPayroll('xh');
            echo $BpObj->Name1."加上奖金的薪资为：".$BpObj->Payment(100,80).'<br>';

            
        ?>

    </body>
</html>