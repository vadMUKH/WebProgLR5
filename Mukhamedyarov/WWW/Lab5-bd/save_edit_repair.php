<?php
require_once('connect.php');
$start = $_GET['start'];
$finish = $_GET['finish'];
$fridge = $_GET['fridge'];
$service = $_GET['service'];
$client = $_GET['client'];
$price = $_GET['price'];
$id = $_GET['id'];
$sql_change = "UPDATE `repair` SET `start` = '$start', `finish` = '$finish', `fridge` = '$fridge', `service` = '$service', `client` = '$client' , price = '$price' WHERE `repairs`.`repair_id` = '$id'";
mysqli_query($connect,$sql_change);
header('Location: index.php')
?>
