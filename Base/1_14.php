<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP有7种数据类型，分别是字符串类型、整型、浮点型、布尔型、数组类型、对象类型、null</h1>
    <h1>对象类型</h1>

    <?php
        //类可以认为是对象的一个设计结构
       class Car{
           var $color;
           //构造函数，new关键字调用的方法，方法名称要和类名一致
           function Car($col='green'){
            //    访问对象属性的方法
               $this->color = $col;
           }
           function what_color(){
               return $this->color;
           }
       }
       //动工，通过new关键字来按照'设计图纸'创建一个对象
       $myCar = new Car('red');
       echo $myCar->color,'<br>';

       $result = $myCar->what_color();
       echo $result,'<br>';

       var_dump($myCar);
    ?>
</body>
</html>