<?php
include_once('../../database/DoorGuard.php');
include_once('../../database/DoorGuardDAO.php');

$DAO = new DoorGuardDAO();

$id_door_guard =$_POST['id_door_guards'];

$result = $DAO->find($id_door_guard);

session_start();

$_SESSION["guard"] = $result;

header('Location: http://localhost/dotimer/views/doors/guard-delete.php');


?>