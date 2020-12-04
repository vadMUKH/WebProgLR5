<!DOCTYPE html>
<html>
<head>
  <title>МухамедьяровВА_ИП_ЛР1</title>
</head>
<body>
  <h1>Задание №1-2</h1>

  <table border=1>
  <?php
  
    for ($i=1;$i<=10;$i++) {
      echo "<tr>";

      for ($x=1;$x<=10;$x++) {
        echo "<td>";
        
        $n=($i*10+$x)-10;
        if($n%2==1) {
        echo "$n";
        }
        else {
        echo "<span style='color:red;'>","$n","</span>";
        }

        echo "</td>";
      }

      echo "</tr>";
    }
  ?>
  </table>
</body>
</html>