<!DOCTYPE html>
<html>
<head>
	<title>МухамедьяровВА_ИП_ЛР3</title>
</head>
<body>
 <h1>Задание №3.1</h1>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите число A:  <INPUT type="text" name="a" size="5">
 Введите число B:  <INPUT type="text" name="b" size="5">
 <P> <INPUT type="submit" name="result" value="Сравнить">
</FORM>

<?php
if (isset($_POST["result"])) {

if ($_POST["a"]>$_POST["b"]) { echo("Наибольшее число: ".$_POST["a"]);} 
else if($_POST["b"]>$_POST["a"]){ echo("Наибольшее число:".$_POST["b"]);}
else if($_POST["b"]==$_POST["a"]){ echo("Числа равны.");}
}
?>

</body>
</html>
