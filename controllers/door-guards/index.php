<?php
include_once('../../database/DoorGuard.php');
include_once('../../database/DoorGuardDAO.php');

$DAO = new DoorGuardDAO();
$id_door = $_POST['id_door'];

$result = $DAO->findByIDDoor($id_door);

session_start();

$_SESSION["guards"] = $result;
$_SESSION["id_door"] = $id_door;

header('Location: http://localhost/dotimer/views/doors/guards.php');

?>