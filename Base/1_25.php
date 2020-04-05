<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>超全局变量,函数或方法中无需执行 global $variable,它们在一个脚本的全部作用域中都可用</h1>

    <?php
        echo '$GLOBALS超全局变量<br>';
        $x = 1;
        $y = 2;
        function handler(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        handler();
        echo $z,'<br>';


        echo '$_SERVER超全局变量<br>';
        echo $_SERVER['PHP_SELF'].'<br>';
        echo $_SERVER['SERVER_NAME'].'<br>';
        echo $_SERVER['HTTP_HOST'].'<br>';
        echo $_SERVER['HTTP_REFERER'].'<br>';
        echo $_SERVER['HTTP_USER_AGENT'].'<br>';
        echo $_SERVER['SCRIPT_NAME'].'<br>';
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label>
            speak_wath:
            <input type="text" name="speakContent">
        </label>
        <input type="submit" value="提交">
    </form>

    <?php
        if($_REQUEST['speakContent']){
            echo $_REQUEST['speakContent'];
        }
        echo '<br>$_REQUEST超全局变量同时拥有$_GET和$_POST的值，但是获取的时候会慢一些';
    ?>
</body>
</html>