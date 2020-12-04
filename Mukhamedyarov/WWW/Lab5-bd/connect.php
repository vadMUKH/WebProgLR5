<?php
$servername = "localhost";
$database = "f0475681_fridges";
$username = "f0475681_mysql";
$password = "mysql";
$connect = mysqli_connect($servername, $username, $password, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>