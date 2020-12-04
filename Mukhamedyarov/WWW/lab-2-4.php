<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мухамедьяров В.А. ПИ-320</title>
</head>
<body>
  <h1>Задача №2.4</h1>
  <h2>Вариант 2</h2>

  <?php
  $A = array();

  for ($k = 0; $k < 21; $k++){
    $A[$k] = rand(-10, 10);
  }
  echo "<h3>Изначальный массив</h3>";
  echo "<pre>"; print_r($A); echo "</pre>";

  asort($A);

  echo "<h3>Отсортированный массив</h3>";
  echo "<pre>"; print_r($A); echo "</pre>";
  ?>

  <h2>Вариант 5</h2>
  <?php
  $A = array();
  $i=0;
  $j=0;
  $z=0;

  for ($k = 0; $k < 10; $k++){
    $A[$k] = rand(-5, 5);
  }

  echo "<h3>Изначальный массив</h3>";
  echo "<pre>"; print_r($A); echo "</pre>";

  $S=(array_sum($A)/$k);

  echo "Среднее арифметическое всех элементов массива = ";
  echo "$S <br>";

  foreach($A as $X) {
    if($X == $S) {
      $i=$i+1;
    }else{}

    if($X<$S) {
      $j=$j+1;
    }else{}

    if($X>$S) {
      $z=$z+1;
    }else{}
  }

  echo "$i"," элементов равно среднему арифметическому массива <br>";
  echo "$j"," элементов меньше среднего арифметического массива <br>";
  echo "$z"," элементов больше среднего арифметического массива";
  ?>
</body>
</html>