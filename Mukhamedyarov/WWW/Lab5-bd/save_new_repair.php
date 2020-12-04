<?php
require_once('connect.php');

    $sql_add = "INSERT INTO repairs (start, finish, fridge_id, service_id, client_name, price) VALUES ('" . $_GET['start']."', '".$_GET['finish']."', '".$_GET['fridge']."', '".$_GET['service']."', '".$_GET['client']."', '".$_GET['price']."')";

    if (mysqli_query($connect, $sql_add))
    { print "<p>Вы добавили заявку.";
    print "<p><a href=\"index.php\"> Вернуться к спискам </a>"; }
    else { print "Ошибка сохранения. <a href=\"index.php\">
    Вернуться к спискам </a>"; }

?>
