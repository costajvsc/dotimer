<?php 

include_once('../../database/Door.php');
include_once('../../database/DoorDAO.php');

$door = new Door();
$door->setDoorName($_POST["door_name"]);

$DAO = new DoorDAO();
$result = $DAO->create($door);

session_start();

if($result)
    $_SESSION["success"] = "Door {$door->getDoorName()} was created with successfully";
else
    $_SESSION["error"] = "Could not create this {$door->getDoorName()}.";

header('Location: http://localhost/dotimer/views/doors/');

?>