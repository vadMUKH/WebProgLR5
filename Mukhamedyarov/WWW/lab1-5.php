<!DOCTYPE html>
<html>
<head>
  <title>МухамедьяровВА_ИП_ЛР1</title>
</head>
<body>
  <h1>Задание №1-1</h1>

  <h2>Вариант 3</h2>

  <img src="img/formula1.png" alt="формула для варианта 3">

  <h3>Результат вычисления по формуле</h3>

  <?php
    $a=rand(-20,20);

    $c=rand(-20,20);
    
    $d=rand(-20,20);

    $result=(2*$c+51*$d)/($d-$a-1);
    echo "(2*$c+51*$d)/($d-$a-1)=" .$result;
  ?>

  <h2>Вариант 6</h2>

  <img src="img/formula2.png" alt="формула для варианта 6">

  <h3>Результат вычисления по формуле</h3>

  <?php
    $a=rand(-20,20);

    $c=rand(-20,20);
    
    $d=rand(-20,20);

    $result=(2*$c+42*$d)/($c+$a-1);
    echo "(2*$c+42*$d)/($c+$a-1)=" .$result;
  ?>
</body>
</html>