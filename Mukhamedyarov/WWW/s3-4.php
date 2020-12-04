<!DOCTYPE html>
<html>
<head>
	<title>МухамедьяровВА_ИП_ЛР3</title>
</head>
<body>
 <h1>Задание №3.4</h1>
  <FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите логин:  <INPUT type="text" name="login" size="3">
 <P> <INPUT type="submit" name="enter" value="Войти">
</FORM>

<?php
if (isset($_POST["enter"])) {
if($_POST["login"]=="user1") {echo "Здравствуйте, user1";}
else if($_POST["login"]=="user2") {echo "Здравствуйте, user2";}
else if($_POST["login"]=="user3") {echo "Здравствуйте, user3";}
else if($_POST["login"]=="user4") {echo "Здравствуйте, user4";}
else {echo "Такой пользователь не найден";}
}
?>

</body>
</html>