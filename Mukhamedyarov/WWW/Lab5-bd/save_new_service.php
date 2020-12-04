<?php
require_once('connect.php');

    $sql_add = "INSERT INTO service (address, name) VALUES ('" . $_GET['address']."', '".$_GET['name']."')";

    if (mysqli_query($connect, $sql_add))
    { print "<p>Вы добавили сервис.";
    print "<p><a href=\"index.php\"> Вернуться к спискам </a>"; }
    else { print "Ошибка сохранения. <a href=\"index.php\">
    Вернуться к спискам </a>"; }

?>
