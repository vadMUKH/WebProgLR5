<?
require_once('connect.php');
?>

<html>
<head> <title> ПИ-320 Мухамедьяров В.А. </title> </head>
<body>
<h1>Холодильники:</h1>
<table border="1">
<tr> 
 <th> Бренд </th> <th> Модель </th> <th> Разморозка </th> <th> Внутренний объем </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result = mysqli_query($connect, "SELECT * FROM `fridge`");
$result = mysqli_fetch_all($result);
  foreach ($result as $result) {
                ?>
                    <tr>
                        <td><?= $result[1] ?></td>
                        <td><?= $result[2] ?></td>
                        <td><?= $result[3] ?></td>
                        <td><?= $result[4] ?></td>
                        <td><a href="edit.php?id=<?= $result[0] ?>">Редактировать</a></td>
                        <td><a style="color: red;" href="delete.php?id=<?= $result[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
        <?
print "</table>";
?>

<p> <a href="new.php"> Добавить холодильник </a>

</body> </html>