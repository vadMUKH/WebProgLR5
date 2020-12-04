<!DOCTYPE html>
<html>
<head>
  <title>МухамедьяровВА_ИП_ЛР1</title>
</head>
<body>
  <h1>Задание №1-3</h1>

  <p></p>

  <h2>Вариант 2</h2>

  <?php
    $M=rand(1,1000);
    $N=rand(1,1000);
    $i=0;
    $j=0;

    echo "Число M = ", "$M", "<br>";
    echo "Число N = ", "$N", "<br>";

    echo "Делители числа M: ";

    for ($d=1;$d<=$M;$d++) {
      if (($M%$d)==0) {
        $i=$i+1;
        echo "$d ";
      }
      else {
      }
    }
    
    echo "<br>", "Делители числа N: ";

    for ($d=1;$d<=$N;$d++) {
      if (($N%$d)==0) {
        $j=$j+1;
        echo "$d ";
      }
      else {
      }  
    }

    echo "<br>", "<br>";
    if ($i==$j) {
      echo "<span style='display:inline-block; background-color:#b3dbcb'>Числа дружественные</span>";
    }
    else {
     echo "<span style='display:inline-block; background-color:#e3abc5'>Числа не дружественные</span>";
    }
  ?>

  <h2>Вариант 5</h2>

  <?php
    $N=rand(1,499);
    $m=1;

    echo "N = ", "$N", "<br>";

    for ($i=1;$i<$N;$i++) {
      for($j=1;$j<$N;$j++) {
        if (pow($i,2)+pow($j,2)==$N) {
          $m=2;
          break;
        }
        else {
        }
      }

      if ($m==2) {
        echo "<span style='display:inline-block; background-color:#b3dbcb'>Число можно представить в виде суммы квадратов: $i и $j</span>";
        break;
      }
      else {
      }

      if ($i==$N-1) {
        echo "<span style='display:inline-block; background-color:#e3abc5'>Число невозможно представить в виде суммы квадратов</span>";
        break;
      }
      else {
      }
    }
  ?>
</body>
</html>