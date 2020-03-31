<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>全局变量会被存放在 $GLOBALS 数组里面，这个数组可以在局部函数中访问，例如想要获取全局变量
    名称为a的变量，可以写为 $GLOBALS['a']。可以用这种方式替代 通过global关键字访问全局变量的方式</h1>


    <?php
        $a = 1;
        function myFun(){
            // global $a;
            // echo $a;

            echo $GLOBALS['a'];
        }
        myFun();
    ?>
</body>
</html>