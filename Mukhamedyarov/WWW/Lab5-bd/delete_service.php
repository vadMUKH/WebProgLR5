<?

require_once('connect.php');
$id = $_GET['id'];


mysqli_query($connect, "DELETE FROM service WHERE `service`.`service_id` = '$id'");

header("Location: index.php");

?>