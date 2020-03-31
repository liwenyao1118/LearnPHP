<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>while循环结构</h1>

    <?php
        echo 'while循环<br>';
        $i = 5;
        while($i>0){
            echo 'while',$i,'<br>';
            $i--;
        }
        echo $i;
    ?>

    <?php
        echo 'dowhile循环<br>';
        $isTrue = false;
        do{
            echo 'dowhile',$isTrue,'<br>';
        }while($isTrue == true);
    ?>
</body>
</html>