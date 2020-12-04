<?
require_once('connect.php');
?>

<html>
<head> <title> ПИ-320 Мухамедьяров В.А. </title> </head>
<body>
<h2>Холодильники:</h2>
<table border="1">
<tr> 
<th> ID </th> <th> Бренд </th> <th> Модель </th> <th> Разморозка </th> <th> Внутренний объем </th> <th> Гарантия </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result = mysqli_query($connect, "SELECT * FROM `fridge`");
$result = mysqli_fetch_all($result);
  foreach ($result as $result) {
                ?>
                    <tr>
                        <td><?= $result[0] ?></td>
                        <td><?= $result[1] ?></td>
                        <td><?= $result[2] ?></td>
                        <td><?= $result[3] ?></td>
                        <td><?= $result[4] ?></td>
                        <td><?= $result[5] ?></td>
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

<h2>Сервисы: </h2>
<table border="1">
<tr> 
<th> ID </th> <th> Название </th> <th> Адрес </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result = mysqli_query($connect, "SELECT * FROM `service`");
$result = mysqli_fetch_all($result);
  foreach ($result as $result) {
                ?>
                    <tr>
                        <td><?= $result[0] ?></td>
                        <td><?= $result[1] ?></td>
                        <td><?= $result[2] ?></td>
                        <td><a href="edit_service.php?id=<?= $result[0] ?>">Редактировать</a></td>
                        <td><a style="color: red;" href="delete_service.php?id=<?= $result[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
        <?
print "</table>";
?>

<p> <a href="new-service.php"> Добавить сервис </a>


<h2>Заявки: </h2>
<table border="1">
<tr> 
 <th> ID </th> <th> Начало работ </th> <th> Конец работ </th> <th> Холодильник </th> <th> Сервис </th> <th> Клиент </th> <th> Цена </th>
 <th> Редактировать </th> <th> Уничтожить </th> </tr>
<?php
$result = mysqli_query($connect, "SELECT * FROM `repairs`");
$result = mysqli_fetch_all($result);
  foreach ($result as $result) {
                ?>
                    <tr>
                        <td><?= $result[0] ?></td>
                        <td><?= $result[1] ?></td>
                        <td><?= $result[2] ?></td>
                        <td><?= $result[3] ?></td>
                        <td><?= $result[4] ?></td>
                        <td><?= $result[5] ?></td>
                        <td><?= $result[6] ?></td>
                        <td><a href="edit_repair.php?id=<?= $result[0] ?>">Редактировать</a></td>
                        <td><a style="color: red;" href="delete_repair.php?id=<?= $result[0] ?>">Удалить</a></td>
                    </tr>
                <?php
            }
        ?>
        <?
print "</table>";
?>

<p> <a href="new-repair.php"> Добавить заявку </a>
<br><br>
<a href = "gen_pdf.php">Скачать PDF</a>
<a href = "gen_excel.php">Скачать Excel</a>

</body> </html>