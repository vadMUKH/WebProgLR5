
<html>
<head>
<title> ПИ-320 Мухамедьяров В.А. </title>
</head>
<body>
<?php
require_once('connect.php');
$id = $_GET['id'];
 $result = mysqli_query($connect,"SELECT * FROM repairs WHERE repair_id= '$id'");
 $result = mysqli_fetch_assoc($result);
?>
<h1>Редактирование данных о холодильнике:</h1>

<form action="save_edit_repair.php" metod="get">
<input type="hidden" name="id" value="<?= $result['repair_id'] ?>">
 Начало работ: <input name="start" size="50" type="text" value = "<?= $result['start'] ?>">
<br>Конец работ: <input name="finish" size="20" type="text"  value = "<?= $result['finish'] ?>">
<br>Холодильник <input name="fridge" size="20" type="text"  value = "<?= $result['fridge_id'] ?>">
<br>Сервис: <input name="service" size="30" type="text"  value = "<?= $result['service_id'] ?>">
<br>Клиент: <input name="client" size="30" type="text"  value = "<?= $result['client_name'] ?>">
<br>Цена: <input name="price" size="30" type="text"  value = "<?= $result['price'] ?>">
<p><input name="save" type="submit" value="Сохранить">
<input name="b2" type="reset" value="Очистить"></p>
</form>

</body>
</html>
