<?

require_once('connect.php');
$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM repairs WHERE `repairs`.`repair_id` = '$id'");

header("Location: index.php");

?>