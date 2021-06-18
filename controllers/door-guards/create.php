<?php
include_once('../../database/DoorGuard.php');
include_once('../../database/DoorGuardDAO.php');

$DAO = new DoorGuardDAO();
$door_guard = new DoorGuard();

$door_guard->setIDDoor($_POST['id_door']);
$door_guard->setIDEmploye($_POST['id_employe']);

$result = $DAO->create($door_guard);

session_start();

if($result)
    $_SESSION["success"] = "Permission was created with successfully";
else
    $_SESSION["error"] = "Could not create this permission.";

header('Location: http://localhost/dotimer/views/doors/guards.php');


?>