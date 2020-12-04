<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мухамедьяров В.А. ПИ-320</title>
</head>
<body>
  <h1>Задание 2.5</h1>
  <h2>Вариант 2</h2>

  <?php
    function f($u, $t) {
      if ($u >= 0)
          return ($u+2*$t);
      elseif ($u<0 && $u>-1)
          return ($u+$t);
      elseif ($u<=-1)
          return ($u*$u-2*$t+1);
    }

    $A=rand(-10,10);
    $B=rand(-10,10);

    $result = f($A,(pow($B,2)-$A)+f($A,pow($B,2)));

    echo "Нахождение значения переменной z, заданной суммой функций. Для нахождения значения
    функции f(u,t) написана пользовательская функция. Числа a и b – случайные.";
    echo "<div><img src='img/function1.png'><figcaption>Формула</figcaption></div>","<br>","<br>";
    echo "A = $A","<br>","B = $B","<br>";
    echo "Z = $result";
  ?>

  <h2>Вариант 5</h2>

  <?php
    function f2($u, $t) {
      if ($u>=0 && $t>=0)
          return ($u-2*$t);
      elseif ($u<0 && $t>=0)
          return ($u+$t);
      elseif ($u>=0 && $t<0)
          return ($u*$u+3*$t);
      elseif ($u<0 && $t<0)
          return ($u*$t+3*$t);
    }
  
    $A=rand(-10,10);
    $B=rand(-10,10);

    $result = f2($A, pow($B, 2)-$A)+f2($A,$B);

    echo "Нахождение значения переменной z, заданной суммой функций. Для нахождения значения
    функции f(u,t) написана пользовательская функция. Числа a и b – случайные.";
    echo "<div><img src='img/function2.png'><figcaption>Формула</figcaption></div>","<br>","<br>";
    echo "A = $A","<br>","B = $B","<br>";
    echo "Z = $result";
  ?>
</body>
</html>