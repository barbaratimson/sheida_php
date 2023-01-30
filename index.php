<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>75 Строковые функции</h1>

    <div>Задание 1</div>
    <?php
        echo(strtoupper("php"));
    ?>
    <br>

    <div>Задание 2</div>
    <?php
        echo(strtolower("php"));
    ?>
    <br>

    <div>Задание 3</div>
    <?php
        echo(ucfirst("london"));
    ?>
    <br>
    
    <div>Задание 4</div>
    <?php
        echo(lcfirst("London"));
    ?>
    <br>

    <div>Задание 5</div>
    <?php
       $a = explode(" ","london is the capital of great britain");
       foreach ($a as &$value) {
            $value = ucfirst($value);
       }
        echo(implode(" ",$a));
    ?>
    <br>

    
    <div>Задание 6</div>
    <?php
       $a = str_split('LONDON');

       foreach ($a as &$value) {
            $value = strtolower($value);
       }
       $a[0] = strtoupper($a[0]);
       echo(implode("",$a));
    ?>
    <br>
    
</body>
</html>