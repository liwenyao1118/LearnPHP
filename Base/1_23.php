<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>数组</h1>

    <?php
        echo '数组能够在一个变量中存放一个或多个值<br>';
        $arr = array('a','b','c','d');
        //其中存放的每一个元素都是一组键值对，默认键为索引
        echo '索引数组<br>';
        echo '通过索引来访问具体位置的元素<br>';
        echo $arr[0],'<br>';
        echo $arr[3],'<br>';
        echo '获取数组长度使用count()函数',count($arr),'<br>';
        echo '遍历索引数组for<br>';
        for($i = 0; $i<count($arr);$i++){
            echo '索引'.$i.'为',$arr[$i],'<br>';
        }
    ?>

    <?php
        echo '关联数组<br>';
        $arr2 = array('a'=>1,'b'=>2,'c'=>3);
        $arr2['d']=3;
        //关联数组是用显示的值去替代默认的索引
        echo $arr2['a'],'<br>';
        echo $arr2['c'],'<br>';
        echo '数组长度',count($arr2),'<br>';
        echo '遍历关联数组foreach<br>';
        foreach($arr2 as $key => $value){
            echo 'key为'.$key.' value为'.$value.'<br>';
        }
    ?>
</body>
</html>