
<html>
<head>
<title> ПИ-320 Мухамедьяров В.А. </title>
</head>
<body>
<?php
require_once('connect.php');
$id = $_GET['id'];
 $result = mysqli_query($connect,"SELECT * FROM fridge WHERE fridge_id= '$id'");
 $result = mysqli_fetch_assoc($result);
?>
<h1>Редактирование данных о холодильнике:</h1>

<form action="save_edit.php" metod="get">
<input type="hidden" name="id" value="<?= $result['fridge_id'] ?>">
 Бренд: <input name="brand" size="50" type="text" value = "<?= $result['brand'] ?>">
<br>Модель: <input name="model" size="20" type="text"  value = "<?= $result['model'] ?>">
<br>Тип разморозки: <input name="defroze" size="20" type="text"  value = "<?= $result['defroze'] ?>">
<br>Внутренний объем: <input name="valume" size="30" type="text"  value = "<?= $result['valume'] ?>">
<br>Срок гарантии: <textarea name="garantee" rows="1" cols="20"><?= $result['garantee'] ?></textarea>
<p><input name="save" type="submit" value="Сохранить">
<input name="b2" type="reset" value="Очистить"></p>
</form>

</body>
</html>
