
<html>
<head>
<title> ПИ-320 Мухамедьяров В.А. </title>
</head>
<body>
<?php
require_once('connect.php');
$id = $_GET['id'];
 $result = mysqli_query($connect,"SELECT * FROM service WHERE service_id= '$id'");
 $result = mysqli_fetch_assoc($result);
?>
<h1>Редактирование данных о сервисе:</h1>

<form action="save_edit_service.php" metod="get">
<input type="hidden" name="id" value="<?= $result['service_id'] ?>">
 Адрес: <input name="address" size="50" type="text" value = "<?= $result['address'] ?>">
<br>Название: <input name="name" size="20" type="text"  value = "<?= $result['name'] ?>">
<p><input name="save" type="submit" value="Сохранить">
<input name="b2" type="reset" value="Очистить"></p>
</form>

</body>
</html>
