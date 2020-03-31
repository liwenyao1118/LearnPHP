<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>条件判断</h1>

    <?php
        echo '单分支判断<br>';
        $age = 17;
        if($age>=18){
            echo '已成年<br>';
        }
        echo '未成年<br>';
    ?>

    <?php
        echo '双分支判断<br>';
        if($age>=18){
            echo '已成年<br>';
        }else{
            echo '未成年<br>';
        }
    ?>

    <?php
        echo '多分支判断<br>';
        $weather = '下雨';
        if($weather == '晴天'){
            echo '我们去郊游<br>';
        }else if ($weather == '下雨'){
            echo '我们去网吧<br>';
        }else {
            echo '我们在家看电视<br>';
        }
    ?>

    <?php
        echo '多分支结构switch<br>';
        $money = 100;
        switch($money){
            case 1000:
                echo '我们去聚餐吧<br>';
            break;
            case 500:
                echo '我们吃快餐吧<br>';
            break;
            case 100:
                echo '我们吃个蛋<br>';
            break;
            default:
                echo '我们饿肚子吧<br>';
        }
    ?>
</body>
</html>