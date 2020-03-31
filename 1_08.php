<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>static关键字：当一个函数执行完成后，默认会销毁函数中的局部变量，但是如果我们希望这个变量在
    执行完成后保留下来，就需要在声明变量的时候在前面加上static关键字。那么每次调用这个函数时，所引用
    的变量值，都是上一次执行完的结果</h1>

    <?php
        function mySum(){
            static $mySum = 0;
            $mySum++;
            echo $mySum.'<br>';
        }
        mySum();
        mySum();
        mySum();
    ?>
</body>
</html>