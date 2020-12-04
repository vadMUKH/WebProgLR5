<?php
require_once('connect.php');
$brand = $_GET['brand'];
$model = $_GET['model'];
$defroze = $_GET['defroze'];
$valume = $_GET['valume'];
$garantee = $_GET['garantee'];
$id = $_GET['id'];
$sql_change = "UPDATE `fridge` SET `brand` = '$brand', `model` = '$model', `defroze` = '$defroze', `valume` = '$valume', `garantee` = '$garantee' WHERE `fridge`.`fridge_id` = '$id'";
mysqli_query($connect,$sql_change);
header('Location: index.php')
?>
