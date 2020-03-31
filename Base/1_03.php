<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP中对于用户所定义的函数、类、关键字等都是大小写不敏感的，但是对于变量是敏感的</h1>

    <?php
        // 内置函数echo
        ECHO '大写的ECHO</br>';
        echo '小写的echo</br>';
        Echo '开头大写的Echo</br><hr/>';


        //变量
        $color = 'red';
        echo $color;
        echo $Color;
        echo $COLOR;
    ?>


</body>
</html>