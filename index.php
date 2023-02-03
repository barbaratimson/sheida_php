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
</body>
</html>
