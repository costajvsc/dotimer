<?php 

include_once('../../database/Door.php');
include_once('../../database/DoorDAO.php');

$door = new Door();
$door->setIDDoor($_POST["id_door"]);
$door->setDoorName($_POST["door_name"]);

$DAO = new DoorDAO();
$result = $DAO->update($door);

session_start();

if($result)
    $_SESSION["success"] = "Door {$door->getDoorName()} was updated with successfully";
else
    $_SESSION["error"] = "Could not update this {$door->getDoorName()}.";

header('Location: http://localhost/dotimer/views/doors/');

?>