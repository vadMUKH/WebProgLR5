<?php
require_once('connect.php');

    $sql_add = "INSERT INTO fridge (brand, model, defroze, valume, garantee) VALUES ('" . $_GET['brand']."', '".$_GET['model']."', '".$_GET['defroze']."','".$_GET['valume']."','".$_GET['garantee']."')";

    if (mysqli_query($connect, $sql_add))
    { print "<p>Вы добавили холодильник.";
    print "<p><a href=\"index.php\"> Вернуться к списку
    холодильников </a>"; }
    else { print "Ошибка сохранения. <a href=\"index.php\">
    Вернуться к списку холодильников </a>"; }

?>
