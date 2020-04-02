<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>函数</h1>

    <?php
        echo '函数以function关键字来声明，函数名不区分大小写，{代表代码块的起始位置，}代表代码块的结束位置<br>';
        function toSay(){           //函数单纯的声明是不会被调用的
            echo 'Hello PHP<br>';
        }
        toSay();            //通过函数名+（）的方式来对函数进行调用
    ?>

    <?php
        //有参函数，形参存放在声明函数的（）中，实参存放在调用函数的（）中
        //形参可以通过 = 来给予一个默认值
        function whatSay($something1,$something2 = 'lwy'){
            echo $something1,$something2,'<br>';
        }
        whatSay('Hello');
    ?>

    <?php
        //带返回值的函数，函数内部的代码在碰到return关键字的时候结束，并且会把return 后面的值返回出去
        function getResult ($a,$b){
            $c = $a + $b;
            return $c;
        }
        echo getResult(1,2),'<br>';
    ?>
</body>
</html>