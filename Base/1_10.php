<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP有7种数据类型，分别是字符串类型、整型、浮点型、布尔型、数组类型、对象类型、null</h1>
    <h1>数字类型</h1>

    <?php
        $a = 1;
        var_dump($a);       //输出数据类型及变量的值

        echo '<br>';

        $b = 2.0;
        var_dump($b);


        echo '<br>';

        $c = -3;
        var_dump($c);

        echo '<br>';
        
        $d = 017;       //八进制
        $e = 0x1C;       //十六进制
        var_dump($d);
        echo '<br>';
        var_dump($e);
    ?>
</body>
</html>