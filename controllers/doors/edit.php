<?php
include_once('../../database/Door.php');
include_once('../../database/DoorDAO.php');

$DAO = new DoorDAO();
$id_door = $_POST['id_door'];

$result = $DAO->find($id_door);

session_start();

$_SESSION["door"] = $result;

header('Location: http://localhost/dotimer/views/doors/edit.php');

?>