<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP有7种数据类型，分别是字符串类型、整型、浮点型、布尔型、数组类型、对象类型、null</h1>
    <h1>NULL类型</h1>

    <?php
        // null关键字用来表示空的值，多用于区别字符串或数据库的值是否为空
        $value = 'Hello World';
        echo $value,'<br>';
        // 也可以用来清空一个变量
        $value = null;
        echo $value;
        echo 'end','<br>';
        var_dump($value);
    ?>
</body>
</html>