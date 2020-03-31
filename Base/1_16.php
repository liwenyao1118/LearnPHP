<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>字符串函数</h1>

    <?php
        echo '判断字符长度strlen()<br>';
        $str = 'Hello World';
        echo strlen($str);


        echo '<br>对字符串中的单词计数（有几个单词）str_word_count()<br>';
        echo str_word_count($str);

        echo '<br>翻转字符串的内容strrev()<br>';
        echo strrev($str);

        echo '<br>检索字符串中是否包含内容strpos()<br>';
        echo strpos($str,'World');

        echo '<br>替换字符串中的内容使用str_replace()<br>';
        echo str_replace('World','lwy',$str);
        echo '<br>',$str,'<br>';        //字符串替换不会改变原来的字符串，而是生成一个新的字符串
    ?>
</body>
</html>