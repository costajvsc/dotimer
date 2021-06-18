<?php
include_once('../../database/DoorGuard.php');
include_once('../../database/DoorGuardDAO.php');

$DAO = new DoorGuardDAO();

$id_door_guard = $_POST['id_door_guards'];

$result = $DAO->delete($id_door_guard);

session_start();

if($result)
    $_SESSION["success"] = "Permission was delete with successfully";
else
    $_SESSION["error"] = "Could not delete this permission.";

header('Location: http://localhost/dotimer/views/doors/guards.php');


?>