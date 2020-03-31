<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP中的作用域分为三种：global全局、local局部、static静态；其中函数外变量的成为全局变量
    ，函数内的成为局部变量，全局变量只能在全局作用域中访问，局部变量只能在局部作用域中访问</h1>

    <?php
        $global_x = 1;

        function myFun(){
            $local_y = 2;

            echo '在局部作用域访问全局变量：'.$global_x.'<br>';
            echo '在局部作用域访问局部变量:'.$local_y.'<br>';
        }
        myFun();

        echo '在全局作用域中访问全局变量：'.$global_x.'<br>';
        echo '在全局作用域中访问局部变量：'.$local_y.'<br>';
    ?>


</body>
</html>