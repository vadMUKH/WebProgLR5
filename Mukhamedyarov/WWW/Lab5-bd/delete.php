<?

require_once('connect.php');
$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM fridge WHERE `fridge`.`fridge_id` = '$id'");

header("Location: index.php");

?>