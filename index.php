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
    <br></br>

    <div>Задание 2</div>
    <?php
        echo(strtolower("php"));
    ?>
    <br></br>

    <div>Задание 3</div>
    <?php
        echo(ucfirst("london"));
    ?>
    <br></br>
    
    <div>Задание 4</div>
    <?php
        echo(lcfirst("London"));
    ?>
    <br></br>

    <div>Задание 5 1 вариант</div>
    <?php
       $a = explode(" ","london is the capital of great britain");
       foreach ($a as &$value) {
            $value = ucfirst($value);
       }
        echo(implode(" ",$a));
    ?>
    <br></br>

    <div>Задание 5 2 вариант</div>
    <?php
       echo(ucwords("london is the capital of great britain"));
        
    ?>
    <br></br>

    
    <div>Задание 6 1 вариант</div>
    <?php
       $a = str_split('LONDON');

       foreach ($a as &$value) {
            $value = strtolower($value);
       }
       $a[0] = strtoupper($a[0]);
       echo(implode("",$a));
    ?>
    <br></br>
    
    <div>Задание 6 2 вариант</div>
    <?php
       echo(ucfirst(strtolower("LONDON")));
    ?>
    <br></br>

    <div>Задание 7</div>
    <?php
       echo(strlen('html css php'));
    ?>
    <br></br>

    <div>Задание 8</div>
    <?php
    $password1 = '1234567890';
    if (strlen($password1) >= 5 && strlen($password1) <= 10) {
        echo('Пароль подходит');
    } else  {
        echo('Пароль не подходит');
    }
    ?>
    <br></br>
    
    <div>Задание 9</div>
    <?php
       echo(substr('html css php', 0, 4)) . '<br>';
       echo(substr('html css php', 5, 3)) . '<br>';
       echo(substr('html css php', 9, 3));
    ?>
    <br></br>

    <div>Задание 10</div>
    <?php
      echo(substr('fsfdfsdfsfdabcd',-3,3));
    ?>
    <br></br>

    <div>Задание 11</div>
    <?php
    $a  = substr('http://code.mu/ru/php/book/prime/inbuilt/string/', 0, 7);
    if ($a == 'http://') {
        echo('http');
    } else {
        echo('Not a http');
    }
    ?>
    <br></br>

    <div>Задание 12</div>
    <?php
    $c = 'https://code.mu/ru/php/book/prime/inbuilt/string/';
    $a  = substr($c, 0, 7);
    $b = substr($c, 0, 8);
    if ($a == 'http://') {
        echo('http');
    } 
    else if ($b == 'https://') {
        echo('https');
    }
    else {
        echo('Not a http/https');
    }
    ?>
    <br></br>

    <div>Задание 13</div>
    <?php
    $a  = substr('aboba.png', -4, 4);
    if ($a == '.png') {
        echo ('png');
    } else {
        echo('Not a png');
    }
    ?>
    <br></br>

    <div>Задание 15</div>
    <?php
    $c = 'aboboba.jpg';
    $a  = substr($c, -4, 4);
    if ($a == '.png') {
        echo('png');
    } 
    else if ($a == '.jpg') {
        echo('jpg');
    }
    else {
        echo('Не png/jpg');
    }
    ?>
    <br></br>

    <div>Задание 16</div>
    <?php
    $a = 'DeserializeUnableToConvertValue';
    if (strlen($a) > 5) {
       $a = substr($a,0,5);
        echo ("{$a}...");
    } else if (strlen($a) <= 5) {
        echo ($a);
    }
    ?>
    <br></br>

    <div>Задание 17</div>
    <?php
    echo (str_replace('.', '-', '31.12.2013'));
    ?>
    <br></br>

    <div>Задание 18</div>
    <?php
    $a = 'agsdgbgsdgbgsdsbcsdgscgsdgc';
    $a = str_replace('a', '1', $a);
    $a = str_replace('b', '2', $a);
    $a = str_replace('c', '3', $a);
    echo ($a);
    ?>
    <br></br>

    <div>Задание 19</div>
    <?php
    $a = '1a2b3c4b5d6e7f8g9h0';
    $b = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];
    foreach ($b as $elem) {
        $a = str_replace($elem, '', $a);
    }
    echo ($a);
    ?>
    <br></br>


</body>
</html>
