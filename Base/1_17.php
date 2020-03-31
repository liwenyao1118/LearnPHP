<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>常量的学习</h1>
    
    <?php
        echo '常量类似变量，但是一旦声明就无法在更改,注意常量是自动全局可用的<br>';
        //常量的定义方法
        define("MYVALUE","lwy is cool~!");
        echo MYVALUE;       //约定：常量为全部大写

        function myFun(){
            echo '<br>',MYVALUE;        //函数内部去访问全局的常量不用global关键字声明
        }
        myFun();
    ?>
</body>
</html>