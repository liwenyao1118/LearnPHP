<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>for循环</h1>

    <?php
        echo 'for循环遍历字符串<br>';
        $str = 'Hello';
        for ($i = 0; $i < strlen($str); $i++){
            echo $str[$i],'<br>';
        }
    ?>

    <?php
        echo 'foreach遍历数组<br>';
        $arr = array('a','b','c','d');
        foreach( $arr as $value ) {         //这里的$value通过as关键字拿到每一次循环时对应的值
            echo $value,'<br>';
        }
    ?>
</body>
</html>