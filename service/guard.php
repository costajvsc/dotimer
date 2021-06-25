<?php
error_reporting(E_ALL ^ E_WARNING); 
require_once('../database/DoorGuardDAO.php');

$card_id = $_GET["card_id"];
$id_door = $_GET["id_door"];

$DoorGuardDAO = new DoorGuardDAO();
$result = $DoorGuardDAO->getGuard($card_id, $id_door);

if(!is_null($result)){
    $response->message = 'authorized';
    $response->status = '200';
}
else {
    $response->message = 'unauthorized';
    $response->status = '401';
}

die(json_encode($response));

?>