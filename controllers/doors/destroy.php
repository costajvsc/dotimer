<?php
include_once('../../database/Door.php');
include_once('../../database/DoorDAO.php');
$DAO = new DoorDAO();
$id_door = $_POST['id_door'];

$result = $DAO->delete($id_door);

session_start();

if($result)
    $_SESSION["success"] = "Door was delete with successfully";
else
    $_SESSION["error"] = "Could not delete this door.";

header('Location: http://localhost/dotimer/views/doors/');

?>