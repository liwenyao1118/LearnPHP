<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP中echo输出和print输出的区别</h1>

    <?php
        echo '这是一段常文本，包含多个字符串<br>';
        echo 'Hello','World','你好','世界','<hr>';
    ?>

    <?php
        $x = 1;
        print $x;

        // print 'Hello','PHP';      //只能输出一个字符串
        print '<br>';

        $y = print 'ok<br>';

        print $y;

        print '<hr>'
    ?>

    <?php
        $a = 'aaaa';
        $b = 'bbbb';
        //单引号表示纯字符串，双引号会解析里面的变量
        echo "你好呀 $a <br>";
        echo '你好呀 {$b} <br>'
    ?>

    <?php
        print "<h2>PHP is fun!</h2>";
        print 'Hello world!<br>';
        print "I'm about to learn PHP! ${a},${b}";
    ?>
    
</body>
</html>