<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Мухамедьяров В.А. ПИ-320</title>

  <style type="text/css">
    table {
    width: 300px;
    border-collapse: collapse;
    }
    td, tr {
    padding: 3px;
    border: 1px solid black;
    }
  </style>
</head>
<body>

  <h1>Задание №2.6</h1>
  
  <?php
    function fill(& $massive) {
      for($i=0;$i<5;$i++) {
        for($j=0;$j<5;$j++)
        $massive[$i][$j] = rand(-10,10);  
      }
    }

    function printmas(& $massive){
      for($i=0;$i<5;$i++) {
        for($j=0;$j<5;$j++) {
          echo $massive[$i][$j]." | ";
        }
        
        echo "<br />";
      }
    }

    function wrtq(){
      echo "Для заданной целочисленной матрицы найти максимум среди сумм элементов диагоналей,
    параллельных главной диагонали матрицы.","<br/>";
    }

    function wrtq2(){
      echo "Дана квадратная матрица порядка N. Для каждого столбца матрицы вычислить и
    напечатать","<br/>"," разность между квадратом суммы и суммой квадратов элементов этого
    столбца.","<br/>";
    }

    function powmasstolb(& $massive, & $powstolb) {
      for($j = 0;$j < 5; $j++) {
        $powsum=0;
        $sumpow =0;

        for($i = 0; $i < 5; $i++){
          $powsum+=$massive[$i][$j];
          $sumpow+=pow($massive[$i][$j],2);
        } 
        $powsum=pow($powsum,2);
        $powstolb[$j] = $powsum - $sumpow;
      }
    }

    function printmas1stroke(& $powstolb) {
      for($i=0;$i<count($powstolb);$i++)
        echo $powstolb[$i]."  |  ";
    }

    function foundmax(& $massive) {
      $sum=array();

      for ($j=0;$j<10;$j++) 
        $sum[$j]=0;
        for ($i=0;$i<5;$i++)
        {
            for ($j=0;($j+$i)<5;$j++)
            {
                $sum[$j]+=$massive[$i][$i+$j];
                $sum[5+$j]+=$massive[$i+$j][$i]; 
            }      
        }
        $maxsum=-1000;
        echo "<br/>";

        for ($j=0;$j<5;$j++) echo "$sum[$j]","  ";
        for ($j=5+1;$j<(2*5);$j++) echo "$sum[$j]","  ";
        for ($j=0;$j<5;$j++)
            if ($maxsum<$sum[$j]) 
                $maxsum=$sum[$j];

        echo "<br/>","Max :  ","$maxsum","<br/>";
    }
  ?>

  <form method="get">
    <input type="submit" name="btm1" id="Question" value="Вариант 2" /><br/>
    <input type="submit" name="btm2" id="fill" value="Вариант 5" /><br/>
  </form>

  <?php
    $massive = array(array());
    $powstolb =array();

    if(isset($_GET['btm1'])){
    wrtq();
    fill($massive);
    printmas($massive);
    foundmax($massive);

    }
    if(isset($_GET['btm2'])){
    wrtq2();
    fill($massive);
    printmas($massive);
    powmasstolb($massive,$powstolb);
    echo "Разность между квадратом суммы и суммой квадратов элементов столбцов:","<br/>";
    printmas1stroke($powstolb);
    }
  ?>
</body>
</html>