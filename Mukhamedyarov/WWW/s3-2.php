<!DOCTYPE html>
<html>
<head>
	<title>МухамедьяровВА_ИП_ЛР3</title>
</head>
<body>
 <h1>Задание №3.2</h1>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
а: <INPUT type="text" name="a" size="5">
b: <INPUT type="text" name="b" size="5">
<P> Операция: 
 <SELECT NAME="whattodo" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложение "+" </OPTION>
 <OPTION VALUE="2"> вычитание "-" </OPTION>
 <OPTION VALUE="3"> умножение "*" </OPTION>
 <OPTION VALUE="4"> деление "/" </OPTION>
 </SELECT>


 <P> <INPUT type="submit" name="result" value="Вычислить">
</FORM>
<?php
if (isset($_POST["result"])) {

switch ($_POST["whattodo"]) {

 case 1:
 $res = $_POST["a"]+$_POST["b"];
 break;
 case 2:
$res = $_POST["a"]-$_POST["b"];
 break;
 case 3:
$res = $_POST["a"]*$_POST["b"];
 break;
 case 4:
$res = $_POST["a"]/$_POST["b"];
 break;
}
echo "Результат: ".$res;
}
?>

</body>
</html>
