<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>运算符</h1>

    <?php
        $x = 10;
        $y = 20;
        echo '+、-、*、/、%<br>';

        echo $x+$y,'<br>';
        echo $x-$y,'<br>';
        echo $x*$y,'<br>';
        echo $x/$y,'<br>';
        echo $x%$y,'<br>';
    ?>


    <?php
        echo '赋值运算<br>';
        echo $x+=$y,'<br>';
        echo $x-=$y,'<br>';
        echo $x*=$y,'<br>';         //等价于$x = $x*$y;
        echo $x /= $y,'<br>';       //等价于$x = $x/$y;
        echo $x %= $y,'<br>';       //等价于$x = $x%$y;
    ?>

    <?php
        echo '串接字符串.<br>';
        $a = 'Hello';
        $b = 'world';
        echo $a.$b.'<br>';
        
        echo '串接赋值.=<br>';
        $a.='lwy';
        echo $a,'<br>';
    ?>

    <?php
        echo '自增自减<br>';
        echo $x--,'<br>';
        echo $x++,'<br>';
        echo ++$y,'<br>';
        echo --$y,'<br>';
    ?>

    <?php
        echo '比较运算符<br>';
        var_dump($x>$y);
        echo '<br>';
        var_dump($x<$y);
        echo '<br>';
        var_dump($x<=$y);
        echo '<br>';
        var_dump($x>=$y);
        echo '<br>';
        var_dump($x==$y);
        echo '<br>';
        var_dump($x===$y);
        echo '<br>';
        var_dump($x!=$y);
        echo '<br>';
        var_dump($x!==$y);
        echo '<br>';
        var_dump($x<>$y);
        echo '<br>';
    ?>

    <?php
        echo '逻辑运算符<br>';
        $i = true;
        $j = false;
        var_dump($i&&$j);
        echo '<br>';
        var_dump($i||$j);
        echo '<br>';
        var_dump(!$i);
        echo '<br>';
    ?>

    <?php
        echo '数组的运算<br>';
        $array1 = array('a'=>"aaa",'b'=>'bbb');
        $array2 = array('b'=>'bbb','c'=>'ccc');

        $result = $array1+$array2;
        var_dump($result);          //合并
        echo '<br>';
        var_dump($array1 == $array2);       //键值对相同，及返回true
        echo '<br>';
        var_dump($array1 === $array2);      //键值对相同，且顺序相同类型相同，则返回 true。
        echo '<br>';
        var_dump($array1 != $array2);          
        echo '<br>';
        var_dump($array1 !== $array2);          
        echo '<br>';
        var_dump($array1 <> $array2);          
        echo '<br>';
    ?>
</body>
</html>