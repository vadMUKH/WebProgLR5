<?php
require_once('connect.php');
$address = $_GET['address'];
$name = $_GET['name'];
$id = $_GET['id'];
$sql_change = "UPDATE `service` SET `address` = '$address', `name` = '$name'";
mysqli_query($connect,$sql_change);
header('Location: index.php')
?>
