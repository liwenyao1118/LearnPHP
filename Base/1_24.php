<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>数组的常用方法</h1>

    <?php
        $arr = array(1,2,5,3,8,6);
        $arr2 = array('a','c','V','p','B');
        $Arr = array('a'=>'AAA','b'=>'bbb','e'=>'eee','d'=>'DDD');

        echo '通过sort()来对索引数组进行排列<br>';
        //数字升序排列
        echo sort($arr),'<br>';         //返回值为1
        var_dump($arr);
        echo '<br>';
        //首字母升序排列,遵循的是ASCII码，A是第65位，a是第97位，故小写字母会排在大写字母的后面
        sort($arr2);
        var_dump($arr2);


        echo '<br>通过rsort（）来对索引数组进行倒序排列<br>';
        rsort($arr);
        rsort($arr2);
        var_dump($arr);
        echo '<br>';
        var_dump($arr2);



        echo '<br>通过asort()来对关联数组进行排序，以键值对的值为准<br>';
        asort($Arr);
        var_dump($Arr);

        echo '<br>通过ksort()来对关联数组进行排序，以键值对的键为准<br>';
        ksort($Arr);
        var_dump($Arr);

        echo '<br>通过arsort（）来对关联数组进行倒序排序，以键值对的值为准<br>';
        arsort($Arr);
        var_dump($Arr);

        echo '<br>通过krsort（）来对关联数组进行倒序排列，以键值对的键为准<br>';
        krsort($Arr);
        var_dump($Arr);
    ?>
</body>
</html>